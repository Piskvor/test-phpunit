<?php

use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/models/HelloModel.php';

Tester\Environment::setup();


$o = new \App\Models\HelloModel();

Assert::equal($o->add(0.2, 0.2), 0.4);
Assert::equal($o->add(0.1, 0.7), 0.8); // interesting, possibly dangerous: Assert::notEqual silently uses epsilon for floats
