<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppliedConditionalAccessPolicyResult - Enum
 */
enum AppliedConditionalAccessPolicyResult: string
{
    case SUCCESS = 'success';
    case FAILURE = 'failure';
    case NOTAPPLIED = 'notApplied';
    case NOTENABLED = 'notEnabled';
    case UNKNOWN = 'unknown';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case REPORTONLYSUCCESS = 'reportOnlySuccess';
    case REPORTONLYFAILURE = 'reportOnlyFailure';
    case REPORTONLYNOTAPPLIED = 'reportOnlyNotApplied';
    case REPORTONLYINTERRUPTED = 'reportOnlyInterrupted';
}
