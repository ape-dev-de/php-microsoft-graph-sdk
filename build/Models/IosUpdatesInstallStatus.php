<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosUpdatesInstallStatus - Enum
 */
enum IosUpdatesInstallStatus: string
{
    case DEVICEOSHIGHERTHANDESIREDOSVERSION = 'deviceOsHigherThanDesiredOsVersion';
    case SHAREDDEVICEUSERLOGGEDINERROR = 'sharedDeviceUserLoggedInError';
    case NOTSUPPORTEDOPERATION = 'notSupportedOperation';
    case INSTALLFAILED = 'installFailed';
    case INSTALLPHONECALLINPROGRESS = 'installPhoneCallInProgress';
    case INSTALLINSUFFICIENTPOWER = 'installInsufficientPower';
    case INSTALLINSUFFICIENTSPACE = 'installInsufficientSpace';
    case INSTALLING = 'installing';
    case DOWNLOADINSUFFICIENTNETWORK = 'downloadInsufficientNetwork';
    case DOWNLOADINSUFFICIENTPOWER = 'downloadInsufficientPower';
    case DOWNLOADINSUFFICIENTSPACE = 'downloadInsufficientSpace';
    case DOWNLOADREQUIRESCOMPUTER = 'downloadRequiresComputer';
    case DOWNLOADFAILED = 'downloadFailed';
    case DOWNLOADING = 'downloading';
    case SUCCESS = 'success';
    case AVAILABLE = 'available';
    case IDLE = 'idle';
    case UNKNOWN = 'unknown';
}
