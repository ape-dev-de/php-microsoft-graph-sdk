<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceEnrollmentType - Enum
 * Possible ways of adding a mobile device to management.
 */
enum DeviceEnrollmentType: string
{
    case UNKNOWN = 'unknown';
    case USERENROLLMENT = 'userEnrollment';
    case DEVICEENROLLMENTMANAGER = 'deviceEnrollmentManager';
    case APPLEBULKWITHUSER = 'appleBulkWithUser';
    case APPLEBULKWITHOUTUSER = 'appleBulkWithoutUser';
    case WINDOWSAZUREADJOIN = 'windowsAzureADJoin';
    case WINDOWSBULKUSERLESS = 'windowsBulkUserless';
    case WINDOWSAUTOENROLLMENT = 'windowsAutoEnrollment';
    case WINDOWSBULKAZUREDOMAINJOIN = 'windowsBulkAzureDomainJoin';
    case WINDOWSCOMANAGEMENT = 'windowsCoManagement';
    case WINDOWSAZUREADJOINUSINGDEVICEAUTH = 'windowsAzureADJoinUsingDeviceAuth';
    case APPLEUSERENROLLMENT = 'appleUserEnrollment';
    case APPLEUSERENROLLMENTWITHSERVICEACCOUNT = 'appleUserEnrollmentWithServiceAccount';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
