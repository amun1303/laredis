<?php

namespace Encore\Redis\DataType;

class String implements DataType
{
    public static function commands()
    {
        return Commands::string();
    }
}
