<?php

namespace App\Enums;

enum ActionMeasurement: string
{
    case MEASUREMENT_ONE_MINUTE = 'one_minute';
    case MEASUREMENT_FIFTEEN_MINUTE = 'fifteen_minute';
    case MEASUREMENT_ONE_HOUR = 'one_hour';
}