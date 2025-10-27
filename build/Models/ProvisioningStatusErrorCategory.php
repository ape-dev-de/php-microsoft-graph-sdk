<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStatusErrorCategory - Enum
 */
enum ProvisioningStatusErrorCategory: string
{
    case FAILURE = 'failure';
    case NONSERVICEFAILURE = 'nonServiceFailure';
    case SUCCESS = 'success';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
