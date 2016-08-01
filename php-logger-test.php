<?php

// Insert the path where you unpacked log4php
include('log4php/Logger.php');

echo "Logger test<br><br>";
 
echo "First we need to load our configuration file...<br>";

// Tell log4php to use our configuration file.
Logger::configure('config.xml');
echo "...ok<br>";
 
// Fetch a logger, it will inherit settings from the root logger
$log = Logger::getLogger('myLogger');
 
echo "Now we try to write some logging info in to myLog.log file...<br>";

// Start logging
$log->trace("My first message.");   // Not logged because TRACE < WARN
$log->debug("My second message.");  // Not logged because DEBUG < WARN
$log->info("My third message.");    // Not logged because INFO < WARN
$log->warn("My fourth message.");   // Logged because WARN >= WARN
$log->error("My fifth message.");   // Logged because ERROR >= WARN
$log->fatal("My sixth message.");   // Logged because FATAL >= WARN

echo "...OK, finished<br>";