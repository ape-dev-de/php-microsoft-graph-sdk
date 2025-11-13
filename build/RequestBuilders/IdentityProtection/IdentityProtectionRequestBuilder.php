<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\IdentityProtectionRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\RiskDetectionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\RiskyServicePrincipalsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\RiskyUsersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityProtection\ServicePrincipalRiskDetectionsRequestBuilder;

/**
 * Request builder for /identityProtection
 */
class IdentityProtectionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get identityProtection
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return IdentityProtectionRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): IdentityProtectionRoot|null
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
     * Deserialize response to IdentityProtectionRoot|null
     */
    private function deserializeGet(string $body): IdentityProtectionRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityProtectionRoot($data);
    }
    /**
     * Update identityProtection
     * @param IdentityProtectionRoot $body Request body
     * @return IdentityProtectionRoot|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(IdentityProtectionRoot $body): IdentityProtectionRoot|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to IdentityProtectionRoot|null
     */
    private function deserializePatch(string $body): IdentityProtectionRoot|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new IdentityProtectionRoot($data);
    }
    /**
     * Navigate to riskDetections
     *
     * @return RiskDetectionsRequestBuilder
     */
    public function riskDetections(): RiskDetectionsRequestBuilder
    {
        return new RiskDetectionsRequestBuilder($this->client, $this->requestUrl . '/riskDetections');
    }
    /**
     * Navigate to riskyServicePrincipals
     *
     * @return RiskyServicePrincipalsRequestBuilder
     */
    public function riskyServicePrincipals(): RiskyServicePrincipalsRequestBuilder
    {
        return new RiskyServicePrincipalsRequestBuilder($this->client, $this->requestUrl . '/riskyServicePrincipals');
    }
    /**
     * Navigate to riskyUsers
     *
     * @return RiskyUsersRequestBuilder
     */
    public function riskyUsers(): RiskyUsersRequestBuilder
    {
        return new RiskyUsersRequestBuilder($this->client, $this->requestUrl . '/riskyUsers');
    }
    /**
     * Navigate to servicePrincipalRiskDetections
     *
     * @return ServicePrincipalRiskDetectionsRequestBuilder
     */
    public function servicePrincipalRiskDetections(): ServicePrincipalRiskDetectionsRequestBuilder
    {
        return new ServicePrincipalRiskDetectionsRequestBuilder($this->client, $this->requestUrl . '/servicePrincipalRiskDetections');
    }
}
