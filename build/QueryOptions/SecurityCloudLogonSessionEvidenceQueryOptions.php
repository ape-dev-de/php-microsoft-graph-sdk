<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCloudLogonSessionEvidence resources
 *
 * Available select fields:
 * - account
 * - browser
 * - deviceName
 * - operatingSystem
 * - previousLogonDateTime
 * - protocol
 * - sessionId
 * - startUtcDateTime
 * - userAgent
 */
class SecurityCloudLogonSessionEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT = 'account';
    public const FIELD_BROWSER = 'browser';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_PREVIOUS_LOGON_DATE_TIME = 'previousLogonDateTime';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SESSION_ID = 'sessionId';
    public const FIELD_START_UTC_DATE_TIME = 'startUtcDateTime';
    public const FIELD_USER_AGENT = 'userAgent';

    /**
     * Select specific SecurityCloudLogonSessionEvidence properties
     * 
     * @param array<string> $select Use SecurityCloudLogonSessionEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
