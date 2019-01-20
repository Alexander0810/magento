<?php 

namespace Alexander\Custom\Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Custom extends Command
{

	public function __construct(
		\Magento\Framework\Filesystem\DirectoryList $directoryList,
		$name = null 
	){
		parent::__construct($name);

		$this->directoryList = $directoryList;
	}

	protected function configure()
   {
       $this->setName('alexander:createmodule');  //What command use
       $this->setDescription('Demo command line'); 
       


       // описывает параметры, которые принимает команда
       $this->setDefinition([
       		new InputArgument(
       			'vendor',
       			InputArgument::REQUIRED,
       			'Enter Vendor'
       			),
       		new InputArgument(
       			'module',
       			InputArgument::REQUIRED,
       			'Enter Module'
       			),
       	]);



       parent::configure();


   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
//   		mkdir($inpute);
		var_dump($this->directoryList->getRoot());
		var_dump($this->directoryList->getPath('app'));
   		var_dump($input->getArgument('vendor'));
   		var_dump($input->getArgument('module'));

   		$string = $this->directoryList->getPath('app').'/code/'.$input->getArgument('vendor').'/'.$input->getArgument('module').'/';


   		$registration = "<?php" . PHP_EOL . "/**" . PHP_EOL . "* @author Alexander" . PHP_EOL .  "*/" . 
   		PHP_EOL . "\Magento\Framework\Component\ComponentRegistrar::register(" . PHP_EOL .
   		"\Magento\Framework\Component\ComponentRegistrar::MODULE," . PHP_EOL .
		"'" . $input->getArgument('vendor') . "_" .  $input->getArgument('module') . "'," . PHP_EOL .
		'__DIR__' . PHP_EOL . ");" . PHP_EOL . "?>";

		$module = "<?xml version=" . '"1.0"' . "?>" . PHP_EOL . '<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">' . PHP_EOL .
			'<module name="' . $input->getArgument('vendor') . "_" . $input->getArgument('module') . 
			'" setup_version="0.0.1">' . PHP_EOL . 
			'<sequence>' . PHP_EOL . "</sequence>" . PHP_EOL . "</module>" . PHP_EOL . "</config>";


$output->writeln($module);
//erc
   		if (!file_exists ($string . 'etc')) {
 		  	mkdir($string . 'etc', 0777, TRUE);
   		}
//view

   		if (!file_exists ($string.'view')){
   			mkdir($string .'view', 0777, TRUE);
	   	}
//view/frontend

	   	if (!file_exists ($string .'view/frontend')){
   			mkdir($string .'view/frontend', 0777, TRUE);
 	  	}
//view/frontend/layout

	   	if (!file_exists ($string .'view/frontend/layout')){
   			mkdir($string .'view/frontend/layout', 0777, TRUE);
   		}


//view/frontend/templates
   	   	if (!file_exists ($string .'view/frontend/templates')){
   			mkdir($string .'view/frontend/templates', 0777, TRUE);
   		}


//view/frontend/web
   	   	if (!file_exists ($string .'view/frontend/web')){
   				mkdir($string .'view/frontend/web', 0777, TRUE);
   		}

//view/frontend/web/js

   	   	if (!file_exists ($string .'view/frontend/web/js')){
   			mkdir($string .'view/frontend/web/js', 0777, TRUE);
   		}
//view/frontend/web/css

   	   	if (!file_exists ($string .'view/frontend/web/css')){
   			mkdir($string .'view/frontend/web/css', 0777, TRUE);
   	}
//Block
   	   	if (!file_exists ($string .'Block')){
   			mkdir($string .'Block', 0777, TRUE);
   		}
//Model

   		if (!file_exists ($string .'Model')){
   			mkdir($string .'Model', 0777, TRUE);
   		}
//Model/ResourceModel

   	   	if (!file_exists ($string .'Model/ResourceModel')){
   			mkdir($string .'Model/ResourceModel', 0777, TRUE);
   		}


// registration.php

   	 //   	if (!file_exists ($string . 'registration.php')){
	   	// 	$handler = fopen($string . 'registration.php', "w+");
	   	// 	fwrite($handler, $registration);
	   	// 	fclose($handler);
   		// }

// module.xml

   	 //   	if (!file_exists ($string . 'etc/' . 'module.xml')){
	   	// 	$handler = fopen($string . 'etc/' . 'module.xml', "w+");
	   	// 	fwrite($handler, $module);
	   	// 	fclose($handler);
   		// }

   }
}




















