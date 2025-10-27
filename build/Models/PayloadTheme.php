<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadTheme - Enum
 */
enum PayloadTheme: string
{
    case UNKNOWN = 'unknown';
    case OTHER = 'other';
    case ACCOUNTACTIVATION = 'accountActivation';
    case ACCOUNTVERIFICATION = 'accountVerification';
    case BILLING = 'billing';
    case CLEANUPMAIL = 'cleanUpMail';
    case CONTROVERSIAL = 'controversial';
    case DOCUMENTRECEIVED = 'documentReceived';
    case EXPENSE = 'expense';
    case FAX = 'fax';
    case FINANCEREPORT = 'financeReport';
    case INCOMINGMESSAGES = 'incomingMessages';
    case INVOICE = 'invoice';
    case ITEMRECEIVED = 'itemReceived';
    case LOGINALERT = 'loginAlert';
    case MAILRECEIVED = 'mailReceived';
    case PASSWORD = 'password';
    case PAYMENT = 'payment';
    case PAYROLL = 'payroll';
    case PERSONALIZEDOFFER = 'personalizedOffer';
    case QUARANTINE = 'quarantine';
    case REMOTEWORK = 'remoteWork';
    case REVIEWMESSAGE = 'reviewMessage';
    case SECURITYUPDATE = 'securityUpdate';
    case SERVICESUSPENDED = 'serviceSuspended';
    case SIGNATUREREQUIRED = 'signatureRequired';
    case UPGRADEMAILBOXSTORAGE = 'upgradeMailboxStorage';
    case VERIFYMAILBOX = 'verifyMailbox';
    case VOICEMAIL = 'voicemail';
    case ADVERTISEMENT = 'advertisement';
    case EMPLOYEEENGAGEMENT = 'employeeEngagement';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
