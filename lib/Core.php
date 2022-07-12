<?php
class Core
{
    function cf_xml($file, $judul_post, $isi_post)
    {
        $domDoc = new DOMDocument;
        $rootElt = $domDoc->createElement('root');
        $rootNode = $domDoc->appendChild($rootElt);
        
        $subElt = $domDoc->createElement('data');
        $attr = $domDoc->createAttribute('judul');
        $attrVal = $domDoc->createTextNode($judul_post);
        $attr->appendChild($attrVal);
        $subElt->appendChild($attr);
        $subNode = $rootNode->appendChild($subElt);
        
        $textNode = $domDoc->createTextNode($isi_post);
        $subNode->appendChild($textNode);
        
        echo htmlentities($domDoc->saveXML());
        
        $f_file = "lib/xml/".$file.".xml";
        $domDoc->save($f_file);
    }
    
    function login($mysqli, $config)
    {
        if (isset($_POST['login'])) 
        {
        	if ((empty($_POST['username'])) or (empty($_POST['password']))) 
            {
        		echo "<script>alert('Username/Password tidak boleh kosong!!'); history.go(-1);</script>";
        	}
            else 
            {
        		$sis_userx = $_POST['username'];
        		$sis_passx = $_POST['password'];
                
                $sis_user  = $mysqli->real_escape_string($sis_userx);
                $sis_pass  = $mysqli->real_escape_string($sis_passx);
                
                $qryLogin  = $mysqli->query("select * from user where username='$sis_user' and password='$sis_pass'");
                $count     = $qryLogin->num_rows;
                $data      = $qryLogin->fetch_array();
                
                if ($count==1) 
                {
                    $_SESSION['log'] = 1; 
                    $js = $config['sesi'];
                    for ($i=0; $i<count($js); $i++)
                    {
                        $_SESSION[$js[$i]] = $data[$js[$i]];
                    }
                    
        			echo "<script>document.location='".root."'; </script>";
                }
                 
                else 
                {
        			echo "<script>alert('username/password tidak cocok!'); history.go(-1);</script>";
        		}
        	}
        }
    }
    
    function logout($config)
    {
        $js = $config['sesi'];
        
        for ($i=0; $i<count($js); $i++)
        {
            unset($_SESSION[$js[$i]]);
        }
        session_destroy();
        
        echo "<script>document.location='".root."'; </script>";
    }
    
    function cek_sesi($config)
    {
        $r = $config['redir_page'];
        if ( !isset($_SESSION['log']) )
        {
            echo "<script>location.href='".$r.".php';</script>";
        }
    }
    
    function set_paging($mysqli, $q, $BatasAwal=10)
    {
        $ba = $BatasAwal;
        if (!empty($_GET['pages'])) 
        {
            $hal = $_GET['pages'] - 1;
            $MulaiAwal = $ba * $hal;
        } 
        else if (!empty($_GET['pages']) and $_GET['pages'] == 1) 
        {
            $MulaiAwal = 0;
        } 
        else if (empty($_GET['pages'])) 
        {
            $MulaiAwal = 0;
        }
        
        $que = $q." LIMIT $MulaiAwal , $ba";
        $select = $mysqli->query($que);
        return $select;
    } 
    
    function link_paging($mysqli, $q, $BatasAwal=10, $class='', $extra_get='')
    {
        if(isset($_GET['page']))
        {
            $link  = $_GET['page'];
            $flink = '?page='.$link.'&';
        }
        else if (!isset($_GET['page']) or empty($_GET['page']))
        {
            $flink = '?';
        }
        $que_l = $q;
        $ba_l  = $BatasAwal;
        
        $cekQuery = $mysqli->query($que_l);
        $jumlahData = $cekQuery->num_rows;

        if ($jumlahData > $ba_l) 
        {
            echo '<br/><center><div class="'.$class.'" style="font-size:14px; font-weight:bold; font-family:cursive; text-shadow:1px 1px silver;">';
            $a = $jumlahData / $ba_l;
            $b = ceil($a);
            for ($ix = 1; $ix <= $b; $ix++) 
            {
                echo '<a style="text-decoration:none;';
                if ($_GET['pages'] == $ix) 
                {
                    echo 'color:red; font-size: 18px;';
                }
                echo '"href="'.$flink.'pages='.$ix.$extra_get.'"> '.$ix.' </a>'; 
            }
            echo '</div></center><br/>';
        }
    }
    
    function modul($mysqli, $config, $apps)
    {
        if (isset($_SERVER['REQUEST_URI']))
        {
            $url = $_SERVER['REQUEST_URI'];
            $segment = explode("/",$url);
            
            if (count($segment)==3 or $segment[2]=='')
            {
                include_once ("apps/content/home.php");
            }
            
            else if ($segment[2]=='content' and !empty($segment[3]))
            {   
                $content = $segment[2];
                $file    = $segment[3];
            
                $page      = $segment[3];
                $nama_file = "$page.php";
                $lokasi_file = "apps/content/$nama_file";
                
                if(!file_exists($lokasi_file))
                {
                    echo "<script>document.location='".root."'; </script>";
                }
                else if(file_exists($lokasi_file))
                {
                    include_once ("apps/content/$nama_file");
                } 
            }
            else if ($segment[2]=='proses' and !empty($segment[3]))
            {
                $page      = $segment[3];
                $nama_file = "$page.php";
                $lokasi_file = "apps/proses/$nama_file";
                
                if(!file_exists($lokasi_file))
                {
                    echo "<script>document.location='".root."'; </script>";
                }
                else if(file_exists($lokasi_file))
                {
                    include_once ("apps/proses/$nama_file");
                }
            }
            else if ($segment[2]=='logout')
            {
                    $this->logout($config);
            }
            else if ($segment[2]=='login')
            {
                $this->login($mysqli, $config);
            }
            else
            {
                echo "<script>document.location='".root."'; </script>";
            }
        }
    }
}
?>