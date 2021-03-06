<?php

namespace PHPSpec2\Formatter\Presenter;

interface PresenterInterface
{
    public function presentValue($value);
    public function presentException(\Exception $exception, $verbose = false);
    public function presentString($string);
}
