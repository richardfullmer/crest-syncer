#!/usr/bin/env php
<?php

require_once __DIR__ . "/vendor/autoload.php";

use Symfony\Component\Console\Application;
use Symfony\Component\Yaml\Yaml;

$config = Yaml::parse(file_get_contents(__DIR__ . '/config.yml'), true);

$application = new Application();
$application->add();