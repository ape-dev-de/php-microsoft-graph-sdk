<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\SharePointProtectionPolicies\SiteProtectionUnitsBulkAdditionJobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SiteProtectionUnitsBulkAdditionJob;

/**
 * Request builder for /solutions/backupRestore/sharePointProtectionPolicies/{sharePointProtectionPolicy-id}/siteProtectionUnitsBulkAdditionJobs/{siteProtectionUnitsBulkAdditionJob-id}
 */
class SiteProtectionUnitsBulkAdditionJobRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get siteProtectionUnitsBulkAdditionJob
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SiteProtectionUnitsBulkAdditionJob|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SiteProtectionUnitsBulkAdditionJob|null
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
     * Deserialize response to SiteProtectionUnitsBulkAdditionJob|null
     */
    private function deserializeGet(string $body): SiteProtectionUnitsBulkAdditionJob|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SiteProtectionUnitsBulkAdditionJob($data);
    }
}
