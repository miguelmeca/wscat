<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Detail 		 通用方法集合
 * @author       sockerboy 
 * @copyright    noya.com 
 * @version      2012.06.01	1.0版
 */
 class Noya{
	function __construct()
	{
		$this->ci =& get_instance();		//获得ci模型
	}
	
	//获取最后一条执行的sql语句,firebug测试数据库使用
	function get_last_query()
	{
		return $this->ci->db->last_query();
	}
	//html图形化对错
	function temp($temp)
	{
		return $temp?"<img src='images/menu/icon-16-apply.png'>":"<img src='images/menu/icon-16-delete.png'>";
	}
	//分页
	function page($res='',$url='',$per_page=0,$num_links=0){
		$this->ci->load->library('pagination');//得到分页库
		$this->ci->load->library('fire_php');
		$config['base_url'] = $url;//设置分页的url路径             
		$config['total_rows'] = $res->num_rows();//得到数据库中的记录的总条数             
		$config['per_page'] = $per_page;//每页记录数    
		$config['num_links']= $num_links;   //设置分页个数	
		$config['use_page_numbers']=TRUE; //设置分页url显示页码
		$config['first_link'] = '首页';            
		$config['last_link'] = '尾页';   
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';		   
        $config['first_tag_open'] = '<div class="button2-right"><div class="start">';//“第一页”链接的打开标签。
        $config['first_tag_close'] = '</div></div>';//“第一页”链接的关闭标签。	
        $config['last_tag_open'] = '<div class="button2-left"><div class="end">';//“最后一页”链接的打开标签。
        $config['last_tag_close'] = '</div></div>';//“最后一页”链接的关闭标签。		
		$config['prev_tag_open'] = '<div class="button2-right"><div class="prev">';//“上一页”链接的打开标签 。
        $config['prev_tag_close'] = '</div></div>';//“上一页”链接的关闭标签 。
		$config['next_tag_open'] = '<div class="button2-left"><div class="next">';//“下一页”链接的打开标签 。
        $config['next_tag_close'] = '</div></div>';//“下一页”链接的关闭标签 。
		$config['cur_tag_open'] = '<span>';//“当前”链接的打开标签。
        $config['cur_tag_close'] = '</span>';//“当前”链接的关闭标签。
		$config['num_page_open'] = '<div class="button2-left"><div class="page">'; //'分页数字的打开标签'。
		$config['num_page_close'] = '</div></div>'; //'分页数字的关闭标签'。
		$this->ci->pagination->initialize($config);//分页的初始化	
	}
	///////////////////////////////单大写字母函数///////////////////////////////////////////
	// 设置和获取统计数据
	function N($key,$step=0)
	{
		static $_num = array();
		if(!isset($_num[$key]))
		{
			$_num[$key]  =  0;
		}
		if(empty($step))
			return $_num[$key];
		else
			$_num[$key]  =  $_num[$key]+(int)$step;
	}

	/**
	 +----------------------------------------------------------
	 * D函数用于实例化Model
	 +----------------------------------------------------------
	 * @param string name Model名称
	 +----------------------------------------------------------
	 * @return Model
	 +----------------------------------------------------------
	 */
	function D($name='')
	{
		static $_model = array();
		if(empty($name)) return new Model;
		$OriClassName = $name;
		if(isset($_model[$OriClassName]))
			return $_model[$OriClassName];

		$className =  $name.'Model';
		import($className, NOYA_ROOT.'Noya/model/','.class.php');
		if(class_exists($className))
		{
			$model = new $className('');
		}
		else
		{
			$model  = new Model();
		}
		$_model[$OriClassName] =  $model;
		return $model;
	}
	/**
	 +----------------------------------------------------------
	 * M函数用于实例化一个没有模型文件的Model
	 +----------------------------------------------------------
	 * @param string name model名称
	 * @param string $connection db连接号
	 +----------------------------------------------------------
	 * @return Model
	 +----------------------------------------------------------
	 */
	function M($name='',$class='model',$connection='')
	{
		static $_model = array();
		if(!isset($_model[$name.'_'.$class]))
			$_model[$name.'_'.$class]   = new $class($name,$connection);
		return $_model[$name.'_'.$class];
	}

	// 获取和设置语言定义(不区分大小写)
	function L($name=null,$value=null)
	{
		static $_lang = array();
		// 空参数返回所有定义
		if(empty($name)) return $_lang;
		// 判断语言获取(或设置)
		// 若不存在,直接返回全大写$name
		if (is_string($name) )
		{
			$name = strtoupper($name);
			if (is_null($value))
				return isset($_lang[$name]) ? $_lang[$name] : $name;
			$_lang[$name] = $value;// 语言定义
			return;
		}
		// 批量定义
		if (is_array($name))
			$_lang = array_merge($_lang,array_change_key_case($name,CASE_UPPER));
		return;
	}
	// 获取配置值
	function C($name=null,$value=null)
	{
		static $_config = array();
		// 无参数时获取所有
		if(empty($name)) return $_config;
		// 优先执行设置获取或赋值
		if (is_string($name))
		{
			if (!strpos($name,'.'))
			{
				$name = strtolower($name);
				if (is_null($value))
					return isset($_config[$name])? $_config[$name] : null;
				$_config[$name] = $value;
				return;
			}
			// 二维数组设置和获取支持
			$name = explode('.',$name);
			$name[0]   = strtolower($name[0]);
			if (is_null($value))
				return isset($_config[$name[0]][$name[1]]) ? $_config[$name[0]][$name[1]] : null;
			$_config[$name[0]][$name[1]] = $value;
			return;
		}
		// 批量设置
		if(is_array($name))
			return $_config = array_merge($_config,array_change_key_case($name));
		return null;// 避免非法参数
	}
	/////////////////////////////////对象获取及扩展技术等///////////////////////////////////////////////
	/**
	 * 获取视图链接
	 *
	 * @author    sockerboy
	 * @param     string $engine
	 * @return    object
	 */
	function &db($dbconnection=0)
	{
		static $db = null;
		if ($db === null)
		{
	//		include_once NOYA_ROOT .'Noya/lib/db/db.lib.php';
	//		include_once NOYA_ROOT .'Noya/lib/db/driver/mysql.lib.php';
			import ( 'db',NOYA_ROOT .'Noya/lib/db/' );
			import ( 'mysql',NOYA_ROOT .'Noya/lib/db/driver/' );
			// 获取数据库操作对象
			$db = db::getInstance(empty($dbconnection)?'':$dbconnection);
		}
		return $db;
	}
	/**
	 * 获取视图链接
	 *
	 * @author    sockerboy
	 * @param     string $engine
	 * @return    object
	 */
	function &v($is_new = false, $engine = 'default')
	{
		import ( 'template' );
		if ($is_new)
		{
			return new template ();
		}
		else
		{
			static $v = null;
			if ($v === null)
			{
				switch ($engine)
				{
					case 'default' :
						$v = new template ();
						break;
				}
			}
			return $v;
		}
	}
	// 缓存服务
	function &cache_server()
	{
		import('cache');
		static $CS = null;
		if ($CS === null)
		{
			switch (CACHE_SERVER)
			{
				case 'memcached' :
					$CS = new MemcacheServer ( array ('host' => MEMCACHE_HOST, 'port' => MEMCACHE_PORT ) );
					break;
				default :
					$CS = new PhpCacheServer ();
					$CS->set_cache_dir ( NOYA_ROOT . '_Cache/sql_cache' );
					break;
			}
		}

		return $CS;
	}
	///////////////////////////////基础函数///////////////////////////////////////////
	/**
	 +----------------------------------------------------------
	 * 字符串命名风格转换
	 * type
	 * =0 将Java风格转换为C的风格
	 * =1 将C风格转换为Java的风格
	 +----------------------------------------------------------
	 * @access protected
	 +----------------------------------------------------------
	 * @param string $name 字符串
	 * @param integer $type 转换类型
	 +----------------------------------------------------------
	 * @return string
	 +----------------------------------------------------------
	 */
	function parse_name($name,$type=0)
	{
		if($type)
		{
			return ucfirst(preg_replace("/_([a-zA-Z])/e", "strtoupper('\\1')", $name));
		}
		else
		{
			$name = preg_replace("/[A-Z]/", "_\\0", $name);
			return strtolower(trim($name, "_"));
		}
	}
	// 错误输出
	function halt($error)
	{
		exit($error);
	}
	// 错误提示（后退一步等）
	function js_alert($str, $url="javascript:")
	{
		@header('Content-Type: text/html; charset=utf-8');
		$_array=explode(':',$url);
		$script='<script type="text/JavaScript">alert("'.$str.'");';
		if($_array[0]=='javascript')
		{
			$script.=empty($_array[1])?'history.go(-1);':$_array[1];
		}
		elseif($_array[0]=='url')
		{
			$_array[1]=="1" && $_array[1]=M_REFERER;
			$script.=empty($_array[1])?"window.close();":"window.location='{$_array[1]}';";
		}
		echo $script.'</script>';
		exit;
	}


	// URL重定向
	/*
	function redirect($msg='',$url,$time=0)
	{
		//多行URL地址支持
		$url = str_replace(array("\n", "\r"), '', $url);
		if(empty($msg))
			$msg    =   "系统将在{$time}秒之后自动跳转到{$url}！";
		if (!headers_sent())
		{
			// redirect
			if(0===$time)
			{
				header("Location: ".$url);
			}
			else
			{
				header("refresh:{$time};url={$url}");
				echo($msg);
			}
			exit();
		}
		else
		{
			$str    = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
			if($time!=0)
				$str   .=   $msg;
			exit($str);
		}
	}
	*/
	// 自定义异常处理
	function throw_exception($msg,$type='NoyaException',$code=0)
	{
		if(class_exists($type,false))
			throw new $type($msg,$code,true);
		else
			halt($msg);
	}

	// 区间调试开始
	function debug_start($label='')
	{
		$GLOBALS[$label]['_beginTime'] = microtime(TRUE);
		if ( MEMORY_LIMIT_ON )  $GLOBALS[$label]['_beginMem'] = memory_get_usage();
	}

	// 区间调试结束，显示指定标记到当前位置的调试
	function debug_end($label='')
	{
		$GLOBALS[$label]['_endTime'] = microtime(TRUE);
		echo '<div style="text-align:center;width:100%">Process '.$label.': Times '.number_format($GLOBALS[$label]['_endTime']-$GLOBALS[$label]['_beginTime'],6).'s ';

		$GLOBALS[$label]['_endMem'] = memory_get_usage();
		echo ' Memories '.number_format(($GLOBALS[$label]['_endMem']-$GLOBALS[$label]['_beginMem'])/1024).' k';
		echo '</div>';
	}

	// 取得对象实例 支持调用类的静态方法
	function get_instance_of($name,$method='',$args=array())
	{
		static $_instance = array();
		$identify   =   empty($args)?$name.$method:$name.$method.to_guid_string($args);
		if (!isset($_instance[$identify]))
		{
			if(class_exists($name))
			{
				$o = new $name();
				if(method_exists($o,$method))
				{
					if(!empty($args))
					{
						$_instance[$identify] = call_user_func_array(array(&$o, $method), $args);
					}
					else
					{
						$_instance[$identify] = $o->$method();
					}
				}
				else
					$_instance[$identify] = $o;
			}
			else
				halt(L('_CLASS_NOT_EXIST_').':'.$name);
		}
		return $_instance[$identify];
	}
	// 优化的require_once
	function require_file_once($filename)
	{
		static $_importFiles = array();
		$filename   =  realpath($filename);
		if (!isset($_importFiles[$filename]))
		{
			if(file_exists_case($filename))
			{
				require $filename;
				$_importFiles[$filename] = true;
			}
			else
			{
				$_importFiles[$filename] = false;
			}
		}
		return $_importFiles[$filename];
	}
	// 区分大小写的文件存在判断
	function file_exists_case($filename)
	{
		if(is_file($filename))
		{
			return true;
		}
		return false;
	}
	/**
	 +----------------------------------------------------------
	 * 导入所需的类库 同java的Import
	 * 本函数有缓存功能
	 +----------------------------------------------------------
	 * @param string $class 类库命名空间字符串
	 * @param string $baseUrl 起始路径
	 * @param string $ext 导入的文件扩展名
	 +----------------------------------------------------------
	 * @return boolen
	 +----------------------------------------------------------
	 */
	function import($class,$baseUrl = '',$ext='.lib.php')
	{
		static $_file = array();
		static $_class = array();

		if(isset($_file[$baseUrl.$class]))
			return true;
		else
			$_file[$baseUrl.$class] = true;

		if(empty($baseUrl))
		{
			// 加载默认地址类库
			$baseUrl =  NOYA_ROOT.'Noya/lib/';
		}
		$classfile = $baseUrl . $class . $ext;
	//    echo $classfile."<br>";  exit;
		if(is_file($classfile))
		{
			// 冲突检测
			$class = basename($classfile,$ext);
			if(isset($_class[$class]))
				throw_exception(L('_CLASS_CONFLICT_').':'.$_class[$class].' '.$classfile);
			$_class[$class] = $classfile;

		}
		//导入目录下的指定类库文件
		return require_file_once($classfile);
	}
	/**
	 * 引入一个函数集
	 *
	 * @author    sockerboy
	 * @return    void
	 */
	function bringin()
	{
		$c = func_get_args ();
		if (empty ( $c ))
		{
			return;
		}
		array_walk ( $c, create_function ( '$item, $key', 'include_once(NOYA_ROOT . \'Noya/func/\' . $item . \'.php\');' ) );
	}
	// 根据PHP各种类型变量生成唯一标识号
	function to_guid_string($mix)
	{
		if(is_object($mix) && function_exists('spl_object_hash'))
		{
			return spl_object_hash($mix);
		}
		elseif(is_resource($mix))
		{
			$mix = get_resource_type($mix).strval($mix);
		}
		else
		{
			$mix = serialize($mix);
		}
		return md5($mix);
	}

	// 自动转换字符集 支持数组转换
	function auto_charset($fContents,$from='gbk',$to='utf-8')
	{
		$from   =  strtoupper($from)=='UTF8'? 'utf-8':$from;
		$to       =  strtoupper($to)=='UTF8'? 'utf-8':$to;
		if( strtoupper($from) === strtoupper($to) || empty($fContents) || (is_scalar($fContents) && !is_string($fContents)) )
		{
			//如果编码相同或者非字符串标量则不转换
			return $fContents;
		}
		if(is_string($fContents) )
		{
			if(function_exists('mb_convert_encoding'))
			{
				return mb_convert_encoding ($fContents, $to, $from);
			}
			elseif(function_exists('iconv'))
			{
				return iconv($from,$to,$fContents);
			}
			else
			{
				return $fContents;
			}
		}
		elseif(is_array($fContents))
		{
			foreach ( $fContents as $key => $val )
			{
				$_key =     auto_charset($key,$from,$to);
				$fContents[$_key] = auto_charset($val,$from,$to);
				if($key != $_key )
					unset($fContents[$key]);
			}
			return $fContents;
		}
		else
		{
			return $fContents;
		}
	}

	// xml编码
	function xml_encode($data,$encoding='utf-8',$root="think")
	{
		$xml = '<?xml version="1.0" encoding="'.$encoding.'"?>';
		$xml.= '<'.$root.'>';
		$xml.= data_to_xml($data);
		$xml.= '</'.$root.'>';
		return $xml;
	}

	function data_to_xml($data)
	{
		if(is_object($data))
		{
			$data = get_object_vars($data);
		}
		$xml = '';
		foreach($data as $key=>$val)
		{
			is_numeric($key) && $key="item id=\"$key\"";
			$xml.="<$key>";
			$xml.=(is_array($val)||is_object($val))?data_to_xml($val):$val;
			list($key,)=explode(' ',$key);
			$xml.="</$key>";
		}
		return $xml;
	}
	/*
	 * @todo 缓存到文件
	 * @author	sockerboy
	 * @param array $carr		数据内容
	 * @param array $cacstr		保存数据的文件名称
	 */
	function cache2file($carr, $cname)
	{
		if (! is_array ( $carr ) || empty ( $cname ))
			return;
		$cacstr = var_export ( $carr, TRUE );
		$cacdir = cache_dir ( $cname );
		noya_mkdir( $cacdir );
		if (@$fp = fopen ( $cacdir . '/' . $cname . '.cac.php', 'wb' ))
		{
			fwrite ( $fp, "<?php\n\r!defined('IN_NOYA')&&exit('FORBIDDEN');\n\r return $cacstr ;\n?>" );
			fclose ( $fp );
		}
	}
	/*
	 * @todo 读取缓存
	 * @author	sockerboy
	 * @param array $cname			缓存名称
	 * @param array $position		保存位置
	 */
	function read_cache($cname)
	{
		if (empty ( $cname ))	return;
		//读取细分缓存的函数
		if (is_array ( $cname ))
		{
			array_map ( 'read_cache', $cname );
		}
		elseif (is_string ( $cname ))
		{
			$cacdir = cache_dir ( $cname );
			$cacfile = $cacdir . $cname . '.cac.php';
			//载入缓存配置等
			Conf::load ( $cacfile, $cname );
		}
	}
	/*
	 * @todo 缓存目录地址
	 * @author	sockerboy
	 * @param array $cname			缓存名称
	 * @return string
	 */
	function cache_dir($cname)
	{
		if (empty ( $cname ))
			return;
		if (in_array ( $cname, array ('cfsite', 'cfvisit', 'cfmail', 'cfpay', 'cfupload', 'cfcomment') ))
		{
			return C('PATH_CACHE_DATA');
		}
		else
		{
			return C('PATH_CACHE_DYNAMIC') . 'cache/';
		}
	}
	/**
	 * 将default.abc类的字符串转为$default['abc']
	 *
	 * @author    sockerboy
	 * @param     string $str
	 * @return    string
	 */
	function strtokey($str, $owner = '')
	{
		if (! $str)
		{
			return '';
		}
		if ($owner)
		{
			return $owner . '[\'' . str_replace ( '.', '\'][\'', $str ) . '\']';
		}
		else
		{
			$parts = explode ( '.', $str );
			$owner = '$' . $parts [0];
			unset ( $parts [0] );
			return strtokey ( implode ( '.', $parts ), $owner );
		}
	}
	// 与.net通讯
	function authcode($string, $operation = 'DECODE', $key = '', $expiry = 31104000 )
	{
		$ckey_length 	= 	4;
		// 随机密钥长度 取值 0-32;
		// 加入随机密钥，可以令密文无任何规律，即便是原文和密钥完全相同，加密结果也会每次不同，增大破解难度。
		// 取值越大，密文变动规律越大，密文变化 = 16 的 $ckey_length 次方
		// 当此值为 0 时，则不产生随机密钥
		$key  = md5($key ? $key : WEE_KEY);
		$keya = md5(substr($key, 0, 16));
		$keyb = md5(substr($key, 16, 16));
		$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
		$cryptkey = $keya.md5($keya.$keyc);
		$key_length = strlen($cryptkey);
		$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
		$string_length = strlen($string);
		$result = '';
		$box = range(0, 255);
		$rndkey = array();
		for($i = 0; $i <= 255; $i++) 
		{
			$rndkey[$i] = ord($cryptkey[$i % $key_length]);
		}

		for($j = $i = 0; $i < 256; $i++) 
		{
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}
		for($a = $j = $i = 0; $i < $string_length; $i++) 
		{
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp;
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}

		if($operation == 'DECODE') 
		{
			if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) 
			{
				return substr($result, 26);

			} 
			else 
			{
				return '';
			}

		} 
		else 
		{
			return $keyc.str_replace('=', '', base64_encode($result));
		}
	}
	/*
	 * @todo 根据数据库编码返回网站编码
	 * @author	sockerboy
	 * @return string
	 */
	function htmlcharset()
	{
		if (DB_CHARSET == 'gbk')
		{
			return 'gbk';
		}
		elseif (DB_CHARSET == 'utf8')
		{
			return 'utf-8';
		}
	}
	/*
	 * @todo 跳转
	 * @param string  $url 跳转url
	 */
	function _header($url = '')
	{
		empty ( $url ) && $url = M_REFERER;
		if (! headers_sent ())
		{
			header ( "Location: $url" );
			exit ();
		}
		else
		{
			echo "<meta http-equiv='refresh' content='0;url=$url'>";
			exit ();
		}
	}
	/*
	 * @todo 记录到文件（主要用来记录操作日志等）
	 * @author	sockerboy
	 * @param string  $rname 记录文件主名称
	 * @param string  $record 记录内容
	 */
	function record2file($rname, $record)
	{
		global $ctime;
		$recorddir = C('PATH_CACHE_DYNAMIC') . 'records/';
		$recordfile_pre = $recorddir . date ( 'Ym', $ctime->time_stamp () ) . '_' . $rname;
		$recordfile = $recordfile_pre . '.php';
		noya_mkdir( $recorddir );
		// 大于一兆重命名该日志
		if (@filesize ( $recordfile ) > 1024 * 1024)
		{
			$dir = opendir ( $recorddir );
			$length = strlen ( $rname );
			$maxid = $id = 0;
			while ( $file = readdir ( $dir ) )
			{
				if (noya_instr ( $recordfile_pre, $file ))
				{
					$id = intval ( substr ( $file, $length + 8, - 4 ) );
					($id > $maxid) && ($maxid = $id);
				}
			}
			closedir ( $dir );
			$recordfilebk = $recordfile_pre . '_' . ($maxid + 1) . '.php';
			@rename ( $recordfile, $recordfilebk );
		}
		if ($fp = @fopen ( $recordfile, 'a' ))
		{
			@flock ( $fp, 2 );
			$record = is_array ( $record ) ? $record : array ($record );
			foreach ( $record as $tmp )
			{
				fwrite ( $fp, "<?PHP exit;?>\t" . str_replace ( array ('<?', '?>' ), '', $tmp ) . "\n" );
			}
			fclose ( $fp );
		}
	}
	/*
	 * @todo 检测验证码
	 * @author	sockerboy
	 * @param string  $code 输入的验证码
	 * @param string  $C	验证类型
	 * @return boolen true通过，false失败
	 */
	function checkverifycode($code, $C = "login")
	{
		global $_SESSION;
		session_start ();
		if (in_array ( strtolower ( $code ), array (strtolower ( get_cookie ( $C . "code" ) ), strtolower ( $_SESSION [$C . 'code'] ) ) ))
		{
			// 失效
			set_cookie ( $C . "code", '', - 31536000 );
			unset ( $_SESSION [$C . 'code'] );
			return true;
		}
		else
		{
			return false;
		}
	}
	/*
	 * @todo 获取客户端IP
	 * @author	sockerboy
	 * @return string
	 */
	function real_ip()
	{
		static $realip = NULL;
		if ($realip !== NULL)
		{
			return $realip;
		}
		if (isset ( $_SERVER ))
		{
			if (isset ( $_SERVER ['HTTP_X_FORWARDED_FOR'] ))
			{
				$arr = explode ( ',', $_SERVER ['HTTP_X_FORWARDED_FOR'] );
				/* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
				foreach ( $arr as $ip )
				{
					$ip = trim ( $ip );
					if ($ip != 'unknown')
					{
						$realip = $ip;
						break;
					}
				}
			}
			elseif (isset ( $_SERVER ['HTTP_CLIENT_IP'] ))
			{
				$realip = $_SERVER ['HTTP_CLIENT_IP'];
			}
			else
			{
				if (isset ( $_SERVER ['REMOTE_ADDR'] ))
				{
					$realip = $_SERVER ['REMOTE_ADDR'];
				}
				else
				{
					$realip = '0.0.0.0';
				}
			}
		}
		else
		{
			if (getenv ( 'HTTP_X_FORWARDED_FOR' ))
			{
				$realip = getenv ( 'HTTP_X_FORWARDED_FOR' );
			} elseif (getenv ( 'HTTP_CLIENT_IP' ))
			{
				$realip = getenv ( 'HTTP_CLIENT_IP' );
			}
			else
			{
				$realip = getenv ( 'REMOTE_ADDR' );
			}
		}
		preg_match ( "/[\d\.]{7,15}/", $realip, $onlineip );
		$realip = ! empty ( $onlineip [0] ) ? $onlineip [0] : '0.0.0.0';
		return $realip;
	}
	/*
	 * @todo 创建像这样的查询: "IN('a','b')";
	 * @author	sockerboy
	 * @param mix  $item_list	 列表数组或字符串,如果为字符串时,字符串只接受数字串
	 * @param string  $field_name 字段名称
	 * @return string
	 */
	function db_create_in($item_list, $field_name = '')
	{
		if (empty ( $item_list ))
		{
			return $field_name . " IN ('') ";
		}
		else
		{
			if (! is_array ( $item_list ))
			{
				$item_list = explode ( ',', $item_list );
				foreach ( $item_list as $k => $v )
				{
					$item_list [$k] = intval ( $v );
				}
			}

			$item_list = array_unique ( $item_list );
			$item_list_tmp = '';
			foreach ( $item_list as $item )
			{
				if ($item !== '')
				{
					$item_list_tmp .= $item_list_tmp ? ",'$item'" : "'$item'";
				}
			}
			if (empty ( $item_list_tmp ))
			{
				return $field_name . " IN ('') ";
			}
			else
			{
				return $field_name . ' IN (' . $item_list_tmp . ') ';
			}
		}
	}
	/*
	 * @todo 通过sql条件查询语句创建统计语句
	 * @author	sockerboy
	 * @param mix  $sql
	 * @return string
	 */
	function db_create_countsql($sql = '')
	{
		$pos = stristr ( $sql, 'from' );
		$countsql = "select count(*) " . $pos;
		$pos1 = stristr ( $sql, 'order by' );
		if ($pos1)
		{
			$countsql = str_replace ( $pos1, '', $countsql );
		}
		return $countsql;
	}
	/*
	 * @todo 字符串转化为数组
	 * @author	sockerboy
	 * @param string  $data
	 * @return array
	 */
	function string2array($data)
	{
		if ($data == '')
			return array ();
		eval ( "\$array = $data;" );
		return $array;
	}
	/*
	 * @todo 数组转化为字符串
	 * @author	sockerboy
	 * @param array  $data
	 * @param boolen  $isformdata	是否去除反斜杠
	 * @return string
	 */
	function array2string($data, $isformdata = 1)
	{
		if ($data == '')
			return '';
		if ($isformdata)
			$data = str_stripslashes ( $data );
		return addslashes ( var_export ( $data, TRUE ) );
	}

	/*
	 * @todo 前台翻页
	 * @author	sockerboy
	 * @param int  $total			总数目
	 * @param int  $displaypg	    每页数目
	 * @return array
	 */
	function page_nav($total, $displaypg = 20)
	{
		global $firstcount;
		$pagenav = array ();
		$firstcount = intval ( $firstcount );
		$displaypg = intval ( $displaypg );
		$page = $_GET ['page'] ? intval ( $_GET ['page'] ) : 1;
		$lastpg = ceil ( $total / $displaypg ); //最后页，也是总页数
		$page = min ( $lastpg, $page );
		$prepg = (($page - 1) < 0) ? "0" : $page - 1; //上一页
		$nextpg = ($page == $lastpg ? 0 : $page + 1); //下一页
		$firstcount = ($page - 1) * $displaypg;
		$firstcount < 0 && $firstcount = 0;

		// 获取当前query
		unset ( $_GET ['page'] );
		$url_format = $_SERVER ['QUERY_STRING'] = http_build_query ( $_GET );
		/*
		if (preg_match('/[&|\?]?page=\w+/i', $_SERVER['QUERY_STRING']) > 0)
		{
			$url_format = preg_replace('/[&|\?]?page=\w+/i', '', $_SERVER['QUERY_STRING']);
		}
		else
		{
			$url_format = $_SERVER['QUERY_STRING'];
		}
		*/
		// 组合分页信息
		$pagenav ['item_count'] = $total;
		$pagenav ['page_count'] = $lastpg;
		$pagenav ['curr_page'] = $page;
		$pagenav ['prev_link'] = url ( "{$url_format}&page={$prepg}" );
		$pagenav ['next_link'] = url ( "{$url_format}&page={$nextpg}" );
		$pagenav ['first_link'] = url ( "{$url_format}&page=1" );
		$pagenav ['end_link'] = url ( "{$url_format}&page={$lastpg}" );
		// 多页
		$pagenav ['page_links'] = array ();
		for($i = $page - 4; $i <= $page; $i ++)
		{
			if ($i < 1)
				continue;
			$pagenav ['page_links'] [$i] = url ( "{$url_format}&page={$i}" );

			//$pagenav.="<a href='$url=$i' target='_self'>[$i]</a>";
		}
		$flag = 0;
		for($i = $page + 1; $i <= $lastpg; $i ++)
		{
			$pagenav ['page_links'] [$i] = url ( "{$url_format}&page={$i}" );
			//$pagenav.="<a href='$url=$i' target='_self'>[$i]</a>";
			$flag ++;
			if ($flag == 4)
				break;
		}
		return $pagenav;
	}
	// url静态化
	function url($url)
	{
		$url	=	$url?'?'.$url:'';
		return str_replace("?&",'?',$url);
	}
	// 递归获取结构数据
	function noya_build_tree($data,$root_id,$n_id='city_id',$n_pid='city_pid',$n_name='city_name')
	{
		$childs=noya_build_tree_find_child($data,$root_id,$n_id,$n_pid,$n_name);
		if(empty($childs))
		{
			return null;
		}
		foreach ($childs as $k => $v)
		{
			$rescurTree=noya_build_tree($data,$v[$n_id],$n_id,$n_pid,$n_name);
	//		if( null !=   $rescurTree)
	//		{
				$childs[$v[$n_id]]['items']=(array)$rescurTree;
	//		}
		}
		return $childs;
	}
	// 递归获取结构数据辅助函数
	function noya_build_tree_find_child(&$arr,$pid,$n_id,$n_pid,$n_name)
	{
		$childs=array();
		foreach ($arr as $k => $v)
		{
			if($v[$n_pid]== $pid)
			{
				$childs[$v[$n_id]]=array("$n_id"=>$v[$n_id],"name"=>$v[$n_name]);
			}
		}
		return $childs;
	}
	/*
	 * @todo 安全过滤
	 * @author	sockerboy
	 * @param string  $string
	 * @return string
	 */
	function noya_htmlspecialchars($string)
	{
		if (is_array ( $string ))
		{
			foreach ( $string as $key => $val )
			{
				$string [$key] = noya_htmlspecialchars ( $val );
			}
		}
		else
		{
			$string = preg_replace ( '/&amp;((#(\d{3,5}|x[a-fA-F0-9]{4})|[a-zA-Z][a-z0-9]{2,5});)/', '&\\1', str_replace ( array ('&', '"', '<', '>' ), array ('&amp;', '&quot;', '&lt;', '&gt;' ), $string ) );
		}
		return $string;
	}
	/*
	 * @todo 逗号分隔的查询字串
	 * @author	sockerboy
	 * @param mix  $arr 数组或字串
	 * @return string
	 */
	function noya_implode($arr)
	{
		return empty ( $arr ) ? '' : "'" . implode ( "','", is_array ( $arr ) ? $arr : array ($arr ) ) . "'";
	}
	/*
	 * @todo 生产随即数
	 * @author	sockerboy
	 * @param string  $length 随机数长度
	 * @param boolen  $numeric 是否全数值类型
	 * @return string  随机数字串
	 */
	function noya_rand($length, $numeric = 0)
	{
		PHP_VERSION < '4.2.0' && mt_srand ( ( double ) microtime () * 1000000 );
		if ($numeric)
		{
			$hash = sprintf ( '%0' . $length . 'd', mt_rand ( 0, pow ( 10, $length ) - 1 ) );
		}
		else
		{
			$hash = '';
			$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
			$max = strlen ( $chars ) - 1;
			for($i = 0; $i < $length; $i ++)
			{
				$hash .= $chars [mt_rand ( 0, $max )];
			}
		}
		return $hash;
	}

	/*
	 * @todo 转换js escape提交过来数据
	 * @author	sockerboy
	 * @param string  $str 被转换字串
	 * @return string
	 */
	function noya_js_unescape($str)
	{
		$ret = '';
		$len = strlen($str);
		for ($i = 0; $i < $len; $i++)
		{
			if ($str[$i] == '%' && $str[$i+1] == 'u')
			{
				$val = hexdec(substr($str, $i+2, 4));
				if ($val < 0x7f) $ret .= chr($val);
				else if($val < 0x800) $ret .= chr(0xc0|($val>>6)).chr(0x80|($val&0x3f));
				else $ret .= chr(0xe0|($val>>12)).chr(0x80|(($val>>6)&0x3f)).chr(0x80|($val&0x3f));
				$i += 5;
			}
			else if ($str[$i] == '%')
			{
				$ret .= urldecode(substr($str, $i, 3));
				$i += 2;
			}
			else $ret .= $str[$i];
		}
		return $ret;
	}
	/*
	 * @todo 检测字符串是否在源字串之内
	 * @author	sockerboy
	 * @param string  $me 被检测字串
	 * @param string  $source 源字串
	 * @return boolen true存在，false不存在
	 */
	function noya_instr($me, $source)
	{
		return !(strpos( $source, $me ) === FALSE);
	}
	// 循环创建目录
	function noya_mkdir($dir, $mode = 0777)
	{
	  if (is_dir($dir) || @mkdir($dir,$mode)) return true;
	  if (!noya_mkdir(dirname($dir),$mode)) return false;
	  return @mkdir($dir,$mode);
	}
	/*
	 * @todo 中文截取，支持gb2312,gbk,utf-8,big5
	 * @author	sockerboy
	 * @param string $str 要截取的字串
	 * @param int $length 截取长度
	 * @param $suffix 是否加尾缀
	 * @param int $start 截取起始位置
	 * @param string $charset utf-8|gb2312|gbk|big5 编码
	 */
	function noya_substr($str, $length, $suffix = false, $start = 0,$charset='utf8')
	{
		if (function_exists ( 'mb_substr' ))
		{
			$more = (mb_strlen ( $str ) > $length) ? true : false;
			$text = mb_substr ( $str, $start, $length, $charset );
			if ($suffix && $more)
				$text .= " ...";
		}
		elseif (function_exists ( 'iconv_substr' ))
		{
			$more = (iconv_strlen ( $str ) > $length) ? true : false;
			$text = iconv_substr ( $str, $start, $length, $charset );
			if ($suffix && $more)
				$text .= " ...";
		}
		else
		{
			$re ['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
			$re ['utf8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
			preg_match_all ( $re[$charset], $str, $match );
			$text = join ( "", array_slice ( $match [0], $start, $length ) );
			if (count ( $match [0] ) > $length)
			{
				$more = true;
				$text = join ( "", array_slice ( $match [0], 0, $length ) );
			}
			else
			{
				$more = false;
				$text = join ( "", array_slice ( $match [0], 0, $length ) );
			}
			if ($suffix && $more)
				$text .= " ...";
		}
		return $text;
	}


	// 生成option选项
	function noya_option_html($arr_data,$selected=0,$class='')
	{
		$option_str='';
		foreach ((array)$arr_data as $key=>$val)
		{
			$selected_str=($key==$selected)?" selected":"";
			$option_str.="<option $class value=\"$key\"$selected_str>$val</option>";
		}
		return $option_str;
	}
	// 生成checkbox选项
	function noya_checkbox_html($name,$arr_data,$selected=array(),$class='',$separate='&nbsp;&nbsp;')
	{
		$checkbox_str='';
		foreach ((array)$arr_data as $key=>$val)
		{
			$selected_str=in_array($key,(array)$selected)?'checked':'';
			$checkbox_str.="<label><input type=\"checkbox\" $class id=\"$name\" name=\"$name\" value=\"$key\" $selected_str />$val $separate </label>";
		}
		return $checkbox_str;
	}
	// 获取checkbox的输出值
	function noya_checkbox_text($res=array(),$data=array())
	{
		if(empty($res)||empty($data)) return '';
		$str = $comma = '';
		foreach ($res as $k=>$v)
		{
			if(in_array($k,$data))
			{
				$str.=$comma.$v;
				$comma=',';
			}
		}
		return $str;
	}
	// 通用上传方法
	function noya_common_upload($input_name='upload',$belong='default',$param=array(),$allow_types='jpg|gif|png',$max_size=2048,$prefix='',$need_water=false)
	{
		//文件上传类
		import('uploader');
		
		// 上传判断和过程
		$root_dir		=	NOYA_ROOT.'data';
		$uploader 		=	new Uploader();
		$uploader->allowed_type($allow_types);
		$uploader->allowed_size($max_size*1024); // 默认2M=2048K
		if ($file['error'] == 0)
		{
			$uploader->addFile($_FILES[$input_name]);
			if (!$uploader->file_info())
			{
				$uploader->get_error();
				return false;
			}
			
			//开始上传处理
			$uploader->root_dir($root_dir);
			$dirname 	= $belong.'/'.date('Y').'/'.date('m').'/'.date('d');
			$filename	= $prefix?$prefix.'_'.$uploader->random_filename():$uploader->random_filename();
			$file_path 	= $uploader->save($dirname, $filename);
		}
		// 上传成功
		if(!empty($file_path))
		{
			$files_info					= array();
			$files_info['fileext']		= strtolower($uploader->_file['extension']);
			$files_info['filesize']		= $uploader->_file['size'];
			$files_info['initname']		= $uploader->_file['name'];
			$files_info['filename']		= $file_path;
			$files_info['belong']		= $belong;
			$files_info['admin_name']	= (string)$param['admin_name'];
			$files_info['admin_id']		= (int)$param['admin_id'];
			$files_info['add_time'] 	= $GLOBALS['timestamp'];
			$files_info['ifcheck'] 		= 1;
			$files_id = M('files')->data($files_info)->add();
		}
		
		// 打水印
		if($need_water)
		{
			// 图片处理类
			import('image');
			$img 		=	new Image(dirname($root_dir.'/'.$file_path));
			// 图片水印(可根据图片尺寸选择不同的水印图片)
			$new_info	=	getImageSize($file_path);
			$waterName	=	NOYA_ROOT."images/common/warkmark400_600.png";
			
			// 水印
			$img->waterMark($filename.'.'.$files_info['fileext'],$waterName,9);
		}
		return $files_id?$files_info:array();
	}
	// 生成32位唯一标识符
	function noya_uniqid()
	{
		return md5(uniqid(mt_rand(), true));
	}
	// 根据生日计算年龄
	function noya_age($date)
	{
		$year_diff = '';
		$time = strtotime($date);
		if(FALSE === $time)
		{
			return '';
		}
		$date = date('Y-m-d', $time);
		list($year,$month,$day) = explode("-",$date);
		$year_diff 		= date("Y")- $year;
		$month_diff 	= date("m") - $month;
		$day_diff		= date("d") - $day;
		if ($day_diff < 0 || $month_diff < 0) $year_diff--;

		return $year_diff;
	}
	//  数组转化为js调用
	function noya_format_js($string, $isjs = 1)
	{
		$string = str_addslashes(str_replace(array("\r", "\n"), array('', ''), $string));
		return $isjs ? 'document.write("'.$string.'");' : $string;
	}
	// 数组递归转换
	function noya_array_recursive(&$array, $function, $apply_to_keys_also = false)
	{
		static $recursive_counter = 0;
		if (++$recursive_counter > 1000)
		{
			die('possible deep recursion attack');
		}
		foreach ($array as $key => $value)
		{
			if (is_array($value))
			{
				noya_array_recursive($array[$key], $function, $apply_to_keys_also);
			}
			else
			{
				$array[$key] = $function($value);
			}
			if ($apply_to_keys_also && is_string($key))
			{
				$new_key = $function($key);
				if ($new_key != $key)
				{
					$array[$new_key] = $array[$key];
					unset($array[$key]);
				}
			}
		}
		$recursive_counter--;
	}
	// 将数组转换为JSON字符串（兼容中文）
	function noya_json($array)
	{
		noya_array_recursive($array, 'urlencode', true);
		$json = json_encode($array);
		return urldecode($json);
	}
	// 下载方法(兼容多个浏览器)
	function noya_downloads($filename,$filepath)
	{
		if (!file_exists($filepath))
		{
			header("Content-type: text/html; charset=utf-8");
			echo "File not found!";
			exit; 
		} 
		else 
		{
			$file	= fopen($filepath,"r"); 
			$ua		= $_SERVER["HTTP_USER_AGENT"];
			$encoded_filename = urlencode($filename);
			$encoded_filename = str_replace("+", "%20", $encoded_filename);
			Header("Content-type: application/octet-stream");
			if (preg_match("/MSIE/", $ua)) 
			{
				header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
			} 
			else if (preg_match("/Firefox/", $ua)) 
			{
				header('Content-Disposition: attachment; filename*="utf8\'\'' . $filename . '"');
			} 
			else 
			{
				header('Content-Disposition: attachment; filename="' . $filename . '"');
			}
			Header("Accept-Ranges: bytes");
			Header("Accept-Length: ".filesize($filepath));
			//Header("Content-Disposition: attachment; filename=".$filename);
			echo fread($file, filesize($filepath));
			fclose($file);
		}
	}
	// 把字符串转化为数组
	function noya_mb_string2array ($string) 
	{
		$strlen = mb_strlen($string);
		while ($strlen) 
		{
			$array[] = mb_substr($string,0,1,"utf8");
	//		$ret_str .= " ".mb_substr($string,0,1,"utf8");
			$string = mb_substr($string,1,$strlen,"utf8");
			$strlen = mb_strlen($string);
		}
		return $array;
	}
	// 返回数组指定键的集合
	function noya_array_by_key($array,$k)
	{
		$ret_array		= array();
		if(!empty($array))
		{
			foreach ((array)$array as $key=>$data)
			{
				$ret_array[] = $data[$k];
			}
		}
		return $ret_array;
	}
	// 按某个键分组数组
	function noya_group_array($array,$k)
	{
		$ret_array		= array();
		if(!empty($array))
		{
			foreach ($array AS $key=>$data )
			{
				$ret_array[$data[$k]][]	= $data;
			}
		}
		return $ret_array;
	}
	// A/B测试分流
	function noya_ab_switch($probability=40,$page='zy_upload')
	{
		// 如果有记录选择了那个页面那么直接返回
		$cookie_result = get_cookie($page);
		if(!empty($cookie_result)) return strtolower($cookie_result);
		
		$rand 	=	rand(0,100);
		if($rand<=$probability)
		{
			$result = "a";
		}
		else 
		{
			$result = "b";
		}
		// 保存一年
		set_cookie($page,$result,31104000);
		//echo " $page <_>"," $cookie_value <_>",$result;
		return $result;
	}
	// qq登录地址
	function noya_qq_login_code()
	{
		// qq登录
		$aParam = array(
			"response_type"    => "code",
			"client_id"        => QQAPPID,
			"redirect_uri"     => DOMAIN_MAIN.'/oauth/qqCallback/',
			"scope"            => 'get_user_info,add_topic,add_one_blog,add_one_blog,add_t,add_pic_t',
			//"state"            =>    $sState
		);
		$aGet = array();
		foreach($aParam as $key=>$val)
		{
			$aGet[] = $key."=".urlencode($val);
		}
		$sUrl = "https://graph.qq.com/oauth2.0/authorize?";
		$sUrl .= join("&",$aGet);
		return $sUrl;
	}
	// 对某个会员发送短信
	function noya_sms2member($sms_content,$MEMBER=array())
	{
		$log_info = array("staff_id"=>0,
							"sms_content"=>$sms_content,
							"sms_mobile"=>'',
							'total'=>1,
							'send_time'=>date("Y-m-d H:i:s",$GLOBALS['timestamp'])
						);
		if(noya_valide_mobile($MEMBER['username']))
		{
			noya_sms_send($sms_content,$MEMBER['username']);
			$log_info["sms_mobile"]	= $MEMBER['username'];
		}
		elseif (noya_valide_mobile($MEMBER['mobile']))
		{
			noya_sms_send($sms_content,$MEMBER['mobile']);
			$log_info["sms_mobile"]	= $MEMBER['mobile'];
		}
		// 日志记录
		if(!empty($log_info['sms_mobile']))
		{
			// 记录发送记录
			M("siteSmsLog")->data($log_info)->add();
		}
	}
	// 发送手机短信
	function noya_sms_send($content,$mobile)
	{
		$tmp = explode(",",$mobile);
		$param = array(
			'userId' 		=> SMSUSERNAME,
			'password' 		=> SMSPASSWORD,
			'pszMobis' 		=> $mobile,		//支持发送至多个号码, 以逗号分隔, 电话号码个数超过100
			'pszMsg' 		=> $content,	//短信内容， 内容长度不大于350个汉字
			'iMobiCount' 	=> intval(count($tmp)),
			'pszSubPort' 	=> "{*}",
		);
	//	echo SMSHOST."/wmgw.asmx/MongateCsSpSendSmsNew?".http_build_query($param)."<br>";exit;
		$result 		= file_get_contents(SMSHOST."/wmgw.asmx/MongateCsSpSendSmsNew?".http_build_query($param));
		$resultstr 		= (current((array)simplexml_load_string($result)));

		return strlen($resultstr)>10&&strlen($resultstr)<25?true:false;
	}
	// 验证单个手机号码
	function noya_valide_mobile($mobile)
	{
		if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[0123456789]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$/",$mobile))
		{    
			return true;   
		}
		else
		{   
			return false; 
		} 
	}
	// 展示时间
	function noya_get_time($btime, $etime)
	{
		if ($btime < $etime) 
		{
			$stime = $btime;
			$endtime = $etime;
		}
		else 
		{
			$stime = $etime;
			$endtime = $btime;
		}
		$timec = $endtime - $stime;
		$days = intval($timec / 86400);
		$rtime = $timec % 86400;
		$hours = intval($rtime / 3600);
		$rtime = $rtime % 3600;
		$mins = intval($rtime / 60);
		$secs = $rtime % 60;
		if($days>=1)
		{
			return date("m-d H:i",$btime);
			//return $days.'天前';
		}
		if($hours>=1)
		{
			return $hours.'小时前';
		}
		if($mins>=1)
		{
			return $mins.'分钟前';
		}
		if($secs>=1)
		{
			return $secs.'秒前';
		}
	}
	//////////////////////////////////////////////////////模板设置////////////////////////////////////////////////////
	/**
	 * 设置模板名称
	 *
	 * @author    sockerboy
	 * @return    void
	 */
	function set_tplId($id = 'default', $folder = 'themes')
	{
		global $NOYA;
		// 配置前台模板
		$NOYA->tpl->set ( 'template_id', $id );
		$NOYA->tpl->set ( 'template_dir', $folder . '/' . $id );
	}
	/*
	 * @todo 导出csv文件
	 * @author	sockerboy
	 * @param array $data 数据（如果需要，列标题也包含在这里）
	 * @param string $filename 文件名（不含扩展名）
	 * @param string $to_charset 目标编码
	 * @return void
	 */
	function export_to_csv($data, $filename, $to_charset = '')
	{
		if ($to_charset && $to_charset != 'utf-8')
		{
			$need_convert = true;
		}
		else
		{
			$need_convert = false;
		}

		header ( "Content-type: application/unknown" );
		header ( "Content-Disposition: attachment; filename={$filename}.csv" );
		$csv_str = '';
		foreach ( $data as $row )
		{
			foreach ( $row as $key => $col )
			{

				if ($need_convert)
				{
					$col = iconv ( "UTF-8", $to_charset, $col );
				}
				$row [$key] = replace_csv_special_char ( $col );

			}
			$csv_str .= join ( ',', $row ) . "\r\n";
		}
		echo $csv_str;
	}
	/*
	 * @todo 替换影响csv文件的字符
	 * @author	sockerboy
	 * @param string string 处理字符串
	 * @return void
	 */
	function replace_csv_special_char($str, $replace = true)
	{
		$str = str_replace ( "\r\n", "", $str );
		$str = str_replace ( "\t", "    ", $str );
		$str = str_replace ( "\n", "", $str );
		if ($replace == true)
		{
			$str = '"' . str_replace ( '"', '""', $str ) . '"';
		}
		return $str;
	}
	/*
	 * @todo 格式化文件大小
	 * @author	sockerboy
	 * @param mix $filesize
	 * @return mix
	 */
	function get_file_size($filesize)
	{
		if ($filesize >= 1073741824)
		{
			$filesize = round ( $filesize / 1073741824 * 100 ) / 100 . ' GB';
		}
		elseif ($filesize >= 1048576)
		{
			$filesize = round ( $filesize / 1048576 * 100 ) / 100 . ' MB';
		}
		elseif ($filesize >= 1024)
		{
			$filesize = round ( $filesize / 1024 * 100 ) / 100 . ' KB';
		}
		else
		{
			$filesize = $filesize . ' bytes';
		}
		return $filesize;
	}
	/**
	 * 得到新订单号
	 * @return  string
	 */
	function noya_get_order_sn()
	{
		/* 选择一个随机的方案 */
		mt_srand((double) microtime() * 1000000);
		return date('ymd',$GLOBALS['timestamp']) . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
	}
	/**
	 * 用户操作日志记录
	 * @return  string
	 */
	function log_action($op='',$detail='')
	{
		global $admin,$MEMBER,$STAFF,$timestamp,$mod,$app,$act;
		if(empty($op)) return;
		$request  = array_merge($_GET,$_POST);
		foreach ($request as &$value)
		{
			$value	=	is_string($value)?noya_htmlspecialchars(noya_substr($value,100)):$value;
		}

		$log_info = array
		(
			"member_id"	=> intval($MEMBER['member_id']),
			"staff_id"	=> intval($STAFF['staff_id']),
			"admin_id"	=> intval($admin['admin_id']),
			"flag"		=> $mod.'_'.$app.'_'.$act,
			"act"	=> $op,
			"detail"	=> $detail,
			"request"	=> var_export($request,1),
			"dirname"	=> dirname(str_replace(NOYA_ROOT,'',$_SERVER['SCRIPT_FILENAME'])),
			"add_time"	=> date("Y-m-d H:i:s",$timestamp),
			"last_ip"	=> real_ip()
		);
		
		return M("logAction")->data($log_info)->add();
	}
	// 由时间和id得到伪订单号
	function noya_get_buy_sn($time,$id)
	{
		return date('ymd',strtotime($time))*1000000+$id;
	}
	// 由伪sn得到ID
	function noya_get_buy_id($string=120730003936)
	{
		$string_true = substr($string,6);
		return intval($string_true);
	}
	// 获得可以使用的起始日期
	function noya_get_theday($the_time)
	{
		static $i = 0;
		include(NOYA_ROOT."Inc/site.holiday.inc.php");
		$today	= date("Y-m-d",$the_time);	
		while (in_array($today,$inc_site_holiday)&&$i<=15)
		{
			$the_time = $the_time - 24*3600; 
			$today	  = date("Y-m-d",$the_time);
			$i++;
		}
		return $today;
	}
	// 生成随机文件名
	function noya_random_filename() 
	{
		$seedstr = explode ( " ", microtime (), 5 );
		$seed = $seedstr [0] * 10000;
		srand ( $seed );
		$random = rand ( 1000, 10000 );
		return date ( "YmdHis", time () ) . $random;
	}
	// 访问间隔
	function noya_check_interval($page,$ttl=15)
	{
		//发送出去的记录时间
		session_start();
		//先判断是否存在$_SESSION['time']
		// 第一次
		if(empty($_SESSION['time']))
		{
			$_SESSION['time']=time();
			return true;
		}
		
		// 多次
		if(($_SESSION['time']+$ttl) < time())
		{
			$_SESSION['time']=time();
			return true;
		}
		else
		{
			return false;
		}
	}
	////////////////////////////////////////////////前台跳转/////////////////////////////////////////////////
	/*
	 * @todo 简短的页面跳转（用于iframe的提示）
	 * @author	sockerboy
	 * @param string $msg
	 * @param int $t
	 */
	function show_msg($msg,$callback,$t = '3')
	{
		global $NOYA, $msg_msg,$dialog_callback,$msg_t;
		set_tplId ( 'public' );
		$msg_msg 			= $msg;
		$dialog_callback 	= $callback;
		$msg_t 				= $t;
		$NOYA->display ( 'msg' );
		exit ();
	}
	/*
	 * @todo 通过页面跳转
	 * @author	sockerboy
	 * @param string $msg
	 * @param string $url
	 * @param int $t
	 * @param array $more
	 */
	function show_message($msg, $url = "", $t = '3', $more = "")
	{
		global $NOYA, $msg_msg, $msg_url, $msg_t, $msg_more;
		set_tplId ( 'public' );
		$msg_msg = $msg;
		$msg_url = urldecode($url ? $url : M_REFERER);
		$msg_t = $t;
		$msg_more = $more;
		$NOYA->display ( 'message' );
		exit ();
	}
	/*
	 * @todo 通过页面警告（不跳转）
	 * @author	sockerboy
	 * @param string $msg
	 * @param string $url
	 */
	function show_warning($msg, $url = "")
	{
		global $NOYA, $msg_msg;
		set_tplId ( 'public' );
		$msg_msg = $msg;
		$NOYA->display ( 'warning' );
		exit ();
	}
	/*
	 * @todo 找不到文件404错误
	 * @author	sockerboy
	 * @param string $msg
	 */
	function show_404($msg_404)
	{
		global $NOYA,$msg;
		$msg = $msg_404;
		@header('HTTP/1.1 404 Not Found');
		@header('Status: 404 Not Found');
		$NOYA->display("404");exit;
	}
	/**
	 * 使用CKEDITOR编辑器
	 *
	 * @author    sockerboy
	 * @param     array $domId
	 * @param     array $params
	 * @return    string
	 * 调用: $this->_build_editor('meno','simple','#ff0000');
	 */
	function noya_build_editor($domname,$template = 'simple', $params = array())
	{
		static $require_js 	=	false;
		$editor_str		=	$require_js?"":"
				<script charset=\"utf-8\" src=\"".DOMAIN_JAVASCRIPT."/editor/kindeditor/kindeditor-min.js\"></script>
				<script charset=\"utf-8\" src=\"".DOMAIN_JAVASCRIPT."/editor/kindeditor/lang/zh_CN.js\"></script>
											";
		if ($template == 'advanced')
		{
			$editor_str	.=	"
						<script>
						var editor_{$domname};
						KindEditor.ready(function(K) {
							editor_{$domname} = K.create('textarea[name=\"{$domname}\"]', {
											allowFileManager : true
							});
						});
						</script>
						";
		}
		elseif ($template == 'simple')
		{
			$editor_str	.=	"
						<script>
							var editor_{$domname};
							KindEditor.ready(function(K) {
								editor_{$domname} = K.create('textarea[name=\"{$domname}\"]', {
											resizeType : 1,
											allowPreviewEmoticons : false,
											allowImageUpload : false,
											items : [
												'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
												'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
												'insertunorderedlist', '|', 'emoticons', 'image', 'link']
										});
							});
						</script>
						";
		}
		$require_js	= true;
		return $editor_str;
	}
	/**
	 * 使用CKEDITOR编辑器
	 *
	 * @author    sockerboy
	 * @param     array $domId
	 * @param     array $params
	 * @return    string
	 * 调用: $this->_build_editor('meno','simple','#ff0000');
	 */
	function _build_editor($domName = 'content', $domId = 'content', $value = '', $template = 'simple', $uiColor = '', $params = array())
	{
		$CKEditor_config = array ();
		if ($uiColor)
		$CKEditor_config ['uiColor'] = $uiColor;
		if ($template == 'advanced')
		{
			$CKEditor_config ['width'] = 650;
			$CKEditor_config ['height'] = 300;
			$CKEditor_config ['extraPlugins'] = 'uploadbutton';
			$CKEditor_config ['toolbar'] = array (array ('Source', '-', 'Templates', '-', 'Undo', 'Redo' ), array ('Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print', 'SpellChecker', 'Scayt' ), array ('Find', 'Replace', '-', 'SelectAll', 'RemoveFormat' ), array ('Maximize', 'ShowBlocks', '-', 'About' ), array ('/' ), array ('Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript' ), array ('NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv' ), array ('JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ), array ('Link', 'Unlink', 'Anchor' ), array ('TextColor', 'BGColor' ), array ('/' ), array ('Styles', 'Format', 'Font', 'FontSize' ), array ('Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'uploadbutton' ) );
		}
		elseif ($template == 'simple')
		{
			$CKEditor_config ['width'] = 560;
			$CKEditor_config ['height'] = 200;
			$CKEditor_config ['toolbar'] = array (array ('FontSize' ), array ('TextColor', 'BGColor' ), array ('Bold', 'Italic', 'Underline', 'Strike' ), array ('JustifyLeft', 'JustifyCenter', 'JustifyRight', '-', 'NumberedList', 'BulletedList' ), array ('Outdent', 'Indent', '-', 'SpecialChar', 'Table' ) );
		}
		else
		{
			$CKEditor_config = $params;
		}
		// 实例化
		import ( 'ckeditor' );
		$CKEditor = new CKEditor ();
		return $CKEditor->editor ( $domName, $domId, $value, $CKEditor_config );
	}
	/**
	 * 优化版var_dump
	 *
	 * @author    ThinkPHP
	 *
	 */
	function dump($var, $echo=true,$label=null, $strict=true)
	{
		$label = ($label===null) ? '' : rtrim($label) . ' ';
		if(!$strict) {
			if (ini_get('html_errors')) {
				$output = print_r($var, true);
				$output = "<pre>".$label.htmlspecialchars($output,ENT_QUOTES)."</pre>";
			} else $output = $label . " : " . print_r($var, true);
		}else {
			ob_start();
			var_dump($var);
			$output = ob_get_clean();
			if(!extension_loaded('xdebug')) {
				$output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
				$output = '<pre>'. $label. htmlspecialchars($output, ENT_QUOTES). '</pre>';
			}
		}
		if ($echo) {
			echo($output);
			return null;
		}else return $output;
	}

	/**
	 *  发送邮件
	 *  author wudi
	 *  date 2011/09/16
	 *  return Boolean;
	 */
	 function sendmail($to, $title, $content, $type='HTML'){
		if ( !class_exists('smtp') ) import('smtp');
		$smtp = new smtp(SMTP_SERVER, SMTP_PORT, true, SMTP_USER, SMTP_PASSWORD);
		//$smtp->debug = TRUE;
		//$title = iconv('UTF-8','GBK',$title);
		//$content = iconv('UTF-8','GBK',$content);
		return $smtp->sendmail($to, SMTP_USER, $title, $content, $type);
	}
	/**
	 *  发送短信
	 *  author wudi
	 *  date 2011/09/16
	 *  return Array;
	 */
	 function sendsms($to, $content, $time=NULL){
		$param = array(
			'username' => SMS_ID.':'.SMS_NAME,
			'password' => SMS_PASSWORD,
			//'form' => '001', 因为不知道有什么用，所以暂时屏蔽
			'to' => $to,//支持发送至多个号码, 以逗号分隔
			'content' => iconv('UTF-8','GBK',$content)
		);
		if( ! empty($time) )$param['presendTime'] = date('Y-m-d H:i:s', strtotime($time));
		$result = file_get_contents(SMS_URL.http_build_query($param));
		//返回字符串应该是GBK编码，不过都是英文，所以不再做编码转换
		$resultArray = explode( ':', strtoupper(trim($result)) );
		return array(
			'status' => 'OK' == $resultArray[0]?1:0,
			'msg' => $resultArray[1]
		);
	}
	/**
	 *  noya_get_animal函数
	 *  author wudi
	 *  date 2011/09/21
	 */
	function noya_get_animal($birth_year, $long=false){
		//1900年是子鼠年
		$animal_long = array(
			'子鼠','丑牛','寅虎','卯兔','辰龙','巳蛇',
			'午马','未羊','申猴','酉鸡','戌狗','亥猪'
		);
		$animal = array(
			'鼠','牛','虎','兔','龙','蛇',
			'马','羊','猴','鸡','狗','猪'
		);
		$my_animal = ($birth_year-1900)%12;
		$animal_f = $long?$animal_long:$animal;
		return $animal_f[$my_animal];
	}

	/*
	 * @todo 设置COOKIE
	 * @author	sockerboy
	 * @param string $name 		cookie名称
	 * @param string $value 	cookie值
	 * @param int $cookietime 	保存时间 0为会话，大于0为时间间隔
	 */
	function set_cookie($name, $value = "", $cookietime = 0)
	{
		global $ctime;
		$timestamp = $ctime->time_stamp ();
		$cookiedomain = C('COOKIE_DOMAIN') == "" ? "" : C('COOKIE_DOMAIN');
		$cookiepath = C('COOKIE_PATH') == "" ? "/" : C('COOKIE_PATH');
		$name = C('COOKIE_PRENAME') . $name;
		$_COOKIE [$name] = $value;
		setcookie ( $name, $value, $cookietime ? $timestamp + $cookietime : 0, $cookiepath, $cookiedomain, $_SERVER ['SERVER_PORT'] == 443 ? 1 : 0 );
	}
	/*
	 * @todo 取得COOKIE
	 * @author	sockerboy
	 * @param string $name 		cookie名称
	 * @return mix
	 */
	function get_cookie($name)
	{
		if (isset ( $_COOKIE [C('COOKIE_PRENAME') . $name] ))
		{
			return $_COOKIE [C('COOKIE_PRENAME') . $name];
		}
		return FALSE;
	}
	/*
	 * @todo 使cookie失效
	 * @author	sockerboy
	 * @param string $name 		cookie名称
	 * @return mix
	 */
	function unset_cookie($name)
	{
		setcookie ( C('COOKIE_PRENAME') . $name, '', time () - 3600 * 24 * 360 );
	}
	/**
	 *  ifXXX函数
	 *  author wudi
	 *  date 2011/09/21
	 */
	function ifset($value, $t, $e='\1'){
		return isset($value)?$t:('\1'==$e?$value:$e);
	}
	function ifunset($value, $t, $e='\1'){
		return ! isset($value)?$t:('\1'==$e?$value:$e);
	}
	function ifempty($value, $t, $e='\1'){
		return empty($value)?$t:('\1'==$e?$value:$e);
	}
	function if0($value, $t, $e='\1'){
		return (0==$value)?$t:('\1'==$e?$value:$e);
	 }
	function if1($value, $t, $e='\1'){
		return (1==$value)?$t:('\1'==$e?$value:$e);
	}
	function iftrue($value, $t, $e='\1'){
		return (true===$value)?$t:('\1'==$e?$value:$e);
	}
	function iffalse($value, $t, $e='\1'){
		return (false===$value)?$t:('\1'==$e?$value:$e);
	}
	function ifnull($value, $t, $e='\1'){
		return (null===$value)?$t:('\1'==$e?$value:$e);
	}

	/*
	+------------------------------------------------------
	* socket http1.0发送通用函数
	* @return string
	* @add by wudi on 2011/12/27
	+------------------------------------------------------
	*/
	function http_request(
		$verb = 'GET',					/* HTTP Request Method (GET and POST supported) */
		$url = '',						/* Target URI */
		$postdata = array(),			/* HTTP POST Data ie. array('var1' => 'val1', 'var2' => 'val2') */
		$cookie = array(),				/* HTTP Cookie Data ie. array('var1' => 'val1', 'var2' => 'val2') */
		$custom_headers = array(),		/* Custom HTTP headers ie. array('Referer: http://localhost/ */
		$timeout = 1000,				/* Socket timeout in milliseconds */
		$req_hdr = false,				/* Include HTTP request headers */
		$res_hdr = false				/* Include HTTP response headers */
		)
	{
		$ret = '';
		$verb = strtoupper($verb);
		$cookie_str = '';
		$postdata_str = '';
		$url = parse_url($url);
		if(empty($url)) return "couldn't parse url";
		if(empty($url['port'])) { $url['port'] = 80; }
		if(empty($url['query'])) { $url['query'] = ""; }

		$crlf = "\r\n";
		$req = $verb .' '. $url['path']. ($url['query'] ? "?" : "") . $url['query'] .' HTTP/1.0' . $crlf;
		$req .= 'Host: '. $url['host'] . $crlf;
		$req .= 'User-Agent: Mozilla/5.0 Firefox/3.6.24' . $crlf;
		$req .= 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8' . $crlf;
		$req .= 'Accept-Language: en-us,en;q=0.5' . $crlf;
		$req .= 'Accept-Encoding: deflate' . $crlf;
		$req .= 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7' . $crlf;

		//custom_headers
		foreach ($custom_headers as $k => $v)$req .= $k .': '. $v . $crlf;

		//cookie
		if (!empty($cookie)){
			if( is_array($cookie) ){
				while (list($k,$v) = each($cookie)) {
					$cookie_str .= $k."=".urlencode($v).';';
				}
			}else{
				$tmpCookie = explode(';', strval($cookie));
				foreach( $tmpCookie as $k=>$v ){
					$t = explode('=', $v, 2);
					$cookie_str .= $t[0]."=".urlencode($t[1]).';';
				}
			}
			$cookie_str = substr($cookie_str, 0, -1);
			$req .= 'Cookie: '. $cookie_str . $crlf;
		}

		//post
		if (strtoupper($verb) == 'POST' && !empty($postdata))
		{
			if( is_array($postdata) ){
				while (list($k,$v) = each($postdata)) {
					$postdata_str .= $k."=".urlencode($v).'&';
				}
			}else{
				$tmpPostdata = explode('&', strval($postdata));
				foreach( $tmpPostdata as $k=>$v ){
					$t = explode('=', $v, 2);
					$postdata_str .= $t[0]."=".urlencode($t[1]).'&';
				}
			}
			$postdata_str = substr($postdata_str, 0, -1);
			$req .= 'Content-Type: application/x-www-form-urlencoded' . $crlf;
			$req .= 'Content-Length: '. strlen($postdata_str) . $crlf . $crlf;
			$req .= $postdata_str;
		}else $req .= $crlf;
		if ($req_hdr)$ret .= $req;
		if (($fp = @fsockopen($url['host'], $url['port'], $errno, $errstr)) == false)return "Error $errno: $errstr\n";
		stream_set_timeout($fp, 0, $timeout * 1000);
		fputs($fp, $req);

		while ($line = fgets($fp))$ret .= $line;
		fclose($fp);

		if (!$res_hdr)$ret = substr($ret, strpos($ret, "\r\n\r\n") + 4);
		return $ret;
	}
	/*
	+------------------------------------------------------
	* 获取用户类型(针对异步消息接口)
	* @return string
	* @add by wudi on 2011/12/27
	+------------------------------------------------------
	*/
	function message_get_membertype($membertype){
		$arr = array(0,0,0);
		if( $membertype == 'normal' )$arr[1] = 2;
		if( $membertype == 'agent' )$arr[2] = 3;
		return implode(',', $arr);
	}



	/**
	 * 创建一个JSON格式的数据
	 *
	 * @access  public
	 * @param   string      $content
	 * @param   integer     $error
	 * @param   string      $message
	 * @param   array       $append
	 * @return  void
	 */
	function make_json_response($content='', $error="0", $message='', $append=array())
	{
		$res = array('error' => $error, 'message' => $message, 'content' => $content);

		if (!empty($append))
		{
			foreach ($append AS $key => $val)
			{
				$res[$key] = $val;
			}
		}

		$val = json_encode($res);

		exit($val);
	}

	/**
	 *
	 *
	 * @access  public
	 * @param
	 * @return  void
	 */
	function make_json_result($content, $message='', $append=array())
	{
		make_json_response($content, 0, $message, $append);
	}

	/**
	 * 创建一个JSON格式的错误信息
	 *
	 * @access  public
	 * @param   string  $msg
	 * @return  void
	 */
	function make_json_error($msg)
	{
		make_json_response('', 1, $msg);
	}

	/**
	 * 去除字符串右侧可能出现的乱码
	 *
	 * @param   string      $str        字符串
	 *
	 * @return  string
	 */
	function trim_right($str)
	{
		$len = strlen($str);
		/* 为空或单个字符直接返回 */
		if ($len == 0 || ord($str{$len-1}) < 127)
		{
			return $str;
		}
		/* 有前导字符的直接把前导字符去掉 */
		if (ord($str{$len-1}) >= 192)
		{
		   return substr($str, 0, $len-1);
		}
		/* 有非独立的字符，先把非独立字符去掉，再验证非独立的字符是不是一个完整的字，不是连原来前导字符也截取掉 */
		$r_len = strlen(rtrim($str, "\x80..\xBF"));
		if ($r_len == 0 || ord($str{$r_len-1}) < 127)
		{
			return sub_str($str, 0, $r_len);
		}

		$as_num = ord(~$str{$r_len -1});
		if ($as_num > (1<<(6 + $r_len - $len)))
		{
			return $str;
		}
		else
		{
			return substr($str, 0, $r_len-1);
		}
	}

	/**
	 * 获取文件后缀名,并判断是否合法
	 *
	 * @param string $file_name
	 * @param array $allow_type
	 * @return blob
	 */
	function get_file_suffix($file_name, $allow_type = array())
	{
		$file_suffix = strtolower(array_pop(explode('.', $file_name)));
		if (empty($allow_type))
		{
			return $file_suffix;
		}
		else
		{
			if (in_array($file_suffix, $allow_type))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	/**
	 * 根据 年 和 周 数 获取一周的开始和结束时间
	 *
	 * @param string $year
	 * @param string $weeknum
	 * @return array
	 */
	function getWeekDate($year,$weeknum){  
		$firstdayofyear=mktime(0,0,0,1,1,$year);  
		$firstweekday=date('N',$firstdayofyear);  
		$firstweenum=date('W',$firstdayofyear);  
		if($firstweenum==1){  
			$day=(1-($firstweekday-1))+7*($weeknum-1);  
			$startdate=date('Y-m-d',mktime(0,0,0,1,$day,$year));  
			$enddate=date('Y-m-d',mktime(0,0,0,1,$day+6,$year));  
		}else{  
			$day=(9-$firstweekday)+7*($weeknum-1);  
			$startdate=date('Y-m-d',mktime(0,0,0,1,$day,$year));  
			$enddate=date('Y-m-d',mktime(0,0,0,1,$day+6,$year));  
		}  
		  
		return array('start'=>$startdate,'end'=>$enddate);      
	}
	// 首页求购过滤电话和联系方式
	function filter_word($string='')
	{
	//	$string 		= "问的 阿什顿飞13818654182 sadf 68218545 大 甩卖 大甩卖";
		$string		= preg_replace("/(\d{3}-\d{8}|\d{4}-\d{7,8}|\d{7,8})|((133|142|144|146|148|149|153|180|181|189|130|131|132|141|143|145|155|156|185|186|134|135|136|137|138|139|140|147|150|151|152|157|158|159|182|183|187|188)\d{8})/i", '***', $string);
		$string		= preg_replace('/[A-Za-z0-9_][-.A-Za-z0-9_]*@[A-Za-z0-9_][-.A-Za-z0-9_]*\.[A-Za-z0-9_][-.A-Za-z0-9_]*/', '***', $string);
		$string		= str_replace(array("大 甩卖","大甩卖","大 甩 卖"), "***", $string);
		return $string;
	}
}