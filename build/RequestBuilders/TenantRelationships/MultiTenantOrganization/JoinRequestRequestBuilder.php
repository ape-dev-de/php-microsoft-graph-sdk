<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships\MultiTenantOrganization;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MultiTenantOrganizationJoinRequestRecord;

/**
 * Request builder for /tenantRelationships/multiTenantOrganization/joinRequest
 */
class JoinRequestRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get multiTenantOrganizationJoinRequestRecord
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return MultiTenantOrganizationJoinRequestRecord|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): MultiTenantOrganizationJoinRequestRecord|null
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
     * Deserialize response to MultiTenantOrganizationJoinRequestRecord|null
     */
    private function deserializeGet(string $body): MultiTenantOrganizationJoinRequestRecord|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MultiTenantOrganizationJoinRequestRecord($data);
    }
    /**
     * Update multiTenantOrganizationJoinRequestRecord
     * @param MultiTenantOrganizationJoinRequestRecord $body Request body
     * @return MultiTenantOrganizationJoinRequestRecord|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(MultiTenantOrganizationJoinRequestRecord $body): MultiTenantOrganizationJoinRequestRecord|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to MultiTenantOrganizationJoinRequestRecord|null
     */
    private function deserializePatch(string $body): MultiTenantOrganizationJoinRequestRecord|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MultiTenantOrganizationJoinRequestRecord($data);
    }
}
