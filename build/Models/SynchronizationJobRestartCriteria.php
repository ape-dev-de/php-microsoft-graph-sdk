<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobRestartCriteria
 */
class SynchronizationJobRestartCriteria
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Comma-separated combination of the following values: None, ConnectorDataStore, Escrows, Watermark, QuarantineState, Full, ForceDeletes. The property can also be empty.   None: Starts a paused or quarantined provisioning job. DO NOT USE. Use the Start synchronizationJob API instead.ConnectorDataStore - Clears the underlying cache for all users. DO NOT USE. Contact Microsoft Support for guidance.Escrows - Provisioning failures are marked as escrows and retried. Clearing escrows will stop the service from retrying failures.Watermark - Removing the watermark causes the service to reevaluate all the users again, rather than just processing changes.QuarantineState - Temporarily lifts the quarantine.Use Full if you want all of the options.ForceDeletes - Forces the system to delete the pending deleted users when using the accidental deletions prevention feature and the deletion threshold is exceeded. Leaving this property empty emulates the Restart provisioning option in the Microsoft Entra admin center. It is similar to setting the resetScope to include QuarantineState, Watermark, and Escrows. This option meets most customer needs.
     * @var SynchronizationJobRestartScope|\stdClass|null
     */
    public SynchronizationJobRestartScope|\stdClass|null $resetScope = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['resetScope'])) {
            $this->resetScope = is_string($data['resetScope']) ? SynchronizationJobRestartScope::tryFrom($data['resetScope']) : $data['resetScope'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
