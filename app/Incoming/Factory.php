<?php

namespace App\Incoming;
use App\Enums\ActionMeasurement;

class Factory
{
    public static function create(ActionMeasurement $action): ActionInterface
    {
        switch ($action) {
            case ActionMeasurement::MEASUREMENT_ONE_MINUTE:
                return new GetOneMinute();
            case ActionMeasurement::MEASUREMENT_FIFTEEN_MINUTE:
                return new GetFifteenMinute();
            case ActionMeasurement::MEASUREMENT_ONE_HOUR:
                return new GetOneHour();
            default:
                throw new \Exception('Action not found');
        }
    }
}
