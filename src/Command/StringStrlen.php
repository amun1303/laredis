<?php

namespace Encore\Laredis\Command;

class StringStrlen extends Command implements RoutableInterface
{
    use RoutableTrait;

    protected $name = 'STRLEN';

    protected $arity = 1;
}
