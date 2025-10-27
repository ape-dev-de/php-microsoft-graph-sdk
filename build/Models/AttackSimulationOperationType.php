<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationOperationType - Enum
 */
enum AttackSimulationOperationType: string
{
    case CREATESIMUALATION = 'createSimualation';
    case UPDATESIMULATION = 'updateSimulation';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
