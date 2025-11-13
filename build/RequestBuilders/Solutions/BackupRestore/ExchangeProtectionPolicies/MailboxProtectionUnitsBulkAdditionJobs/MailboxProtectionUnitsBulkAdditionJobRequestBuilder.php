<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ExchangeProtectionPolicies\MailboxProtectionUnitsBulkAdditionJobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MailboxProtectionUnitsBulkAdditionJob;

/**
 * Request builder for /solutions/backupRestore/exchangeProtectionPolicies/{exchangeProtectionPolicy-id}/mailboxProtectionUnitsBulkAdditionJobs/{mailboxProtectionUnitsBulkAdditionJob-id}
 */
class MailboxProtectionUnitsBulkAdditionJobRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get mailboxProtectionUnitsBulkAdditionJob
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MailboxProtectionUnitsBulkAdditionJob|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MailboxProtectionUnitsBulkAdditionJob|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to MailboxProtectionUnitsBulkAdditionJob|null
     */
    private function deserializeGet(string $body): MailboxProtectionUnitsBulkAdditionJob|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MailboxProtectionUnitsBulkAdditionJob($data);
    }
}
