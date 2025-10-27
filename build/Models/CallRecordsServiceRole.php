<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsServiceRole - Enum
 */
enum CallRecordsServiceRole: string
{
    case UNKNOWN = 'unknown';
    case CUSTOMBOT = 'customBot';
    case SKYPEFORBUSINESSMICROSOFTTEAMSGATEWAY = 'skypeForBusinessMicrosoftTeamsGateway';
    case SKYPEFORBUSINESSAUDIOVIDEOMCU = 'skypeForBusinessAudioVideoMcu';
    case SKYPEFORBUSINESSAPPLICATIONSHARINGMCU = 'skypeForBusinessApplicationSharingMcu';
    case SKYPEFORBUSINESSCALLQUEUES = 'skypeForBusinessCallQueues';
    case SKYPEFORBUSINESSAUTOATTENDANT = 'skypeForBusinessAutoAttendant';
    case MEDIATIONSERVER = 'mediationServer';
    case MEDIATIONSERVERCLOUDCONNECTOREDITION = 'mediationServerCloudConnectorEdition';
    case EXCHANGEUNIFIEDMESSAGINGSERVICE = 'exchangeUnifiedMessagingService';
    case MEDIACONTROLLER = 'mediaController';
    case CONFERENCINGANNOUNCEMENTSERVICE = 'conferencingAnnouncementService';
    case CONFERENCINGATTENDANT = 'conferencingAttendant';
    case AUDIOTELECONFERENCERCONTROLLER = 'audioTeleconferencerController';
    case SKYPEFORBUSINESSUNIFIEDCOMMUNICATIONAPPLICATIONPLATFORM = 'skypeForBusinessUnifiedCommunicationApplicationPlatform';
    case RESPONSEGROUPSERVICEANNOUNCEMENTSERVICE = 'responseGroupServiceAnnouncementService';
    case GATEWAY = 'gateway';
    case SKYPETRANSLATOR = 'skypeTranslator';
    case SKYPEFORBUSINESSATTENDANT = 'skypeForBusinessAttendant';
    case RESPONSEGROUPSERVICE = 'responseGroupService';
    case VOICEMAIL = 'voicemail';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
