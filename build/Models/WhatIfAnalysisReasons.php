<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WhatIfAnalysisReasons - Enum
 */
enum WhatIfAnalysisReasons: string
{
    case NOTSET = 'notSet';
    case NOTENOUGHINFORMATION = 'notEnoughInformation';
    case INVALIDCONDITION = 'invalidCondition';
    case USERS = 'users';
    case WORKLOADIDENTITIES = 'workloadIdentities';
    case APPLICATION = 'application';
    case USERACTIONS = 'userActions';
    case AUTHENTICATIONCONTEXT = 'authenticationContext';
    case DEVICEPLATFORM = 'devicePlatform';
    case DEVICES = 'devices';
    case CLIENTAPPS = 'clientApps';
    case LOCATION = 'location';
    case SIGNINRISK = 'signInRisk';
    case EMPTYPOLICY = 'emptyPolicy';
    case INVALIDPOLICY = 'invalidPolicy';
    case POLICYNOTENABLED = 'policyNotEnabled';
    case USERRISK = 'userRisk';
    case TIME = 'time';
    case INSIDERRISK = 'insiderRisk';
    case AUTHENTICATIONFLOW = 'authenticationFlow';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
