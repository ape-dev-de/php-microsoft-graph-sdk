<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DlpAction - Enum
 */
enum DlpAction: string
{
    case NOTIFYUSER = 'notifyUser';
    case BLOCKACCESS = 'blockAccess';
    case DEVICERESTRICTION = 'deviceRestriction';
    case BROWSERRESTRICTION = 'browserRestriction';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case RESTRICTACCESS = 'restrictAccess';
    case GENERATEALERT = 'generateAlert';
    case GENERATEINCIDENTREPORTACTION = 'generateIncidentReportAction';
    case SPBLOCKANONYMOUSACCESS = 'sPBlockAnonymousAccess';
    case SPRUNTIMEACCESSCONTROL = 'sPRuntimeAccessControl';
    case SPSHARINGNOTIFYUSER = 'sPSharingNotifyUser';
    case SPSHARINGGENERATEINCIDENTREPORT = 'sPSharingGenerateIncidentReport';
}
