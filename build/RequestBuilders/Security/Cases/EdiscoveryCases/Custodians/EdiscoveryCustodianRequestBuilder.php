<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityEdiscoveryCustodian;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\LastIndexOperationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\SecurityActivateRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\SecurityApplyHoldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\SecurityReleaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\SecurityRemoveHoldRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\SecurityUpdateIndexRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\SiteSourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\UnifiedGroupSourcesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\Cases\EdiscoveryCases\Custodians\UserSourcesRequestBuilder;

/**
 * Request builder for /security/cases/ediscoveryCases/{ediscoveryCase-id}/custodians/{ediscoveryCustodian-id}
 */
class EdiscoveryCustodianRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get ediscoveryCustodian
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityEdiscoveryCustodian|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityEdiscoveryCustodian|null
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
     * Deserialize response to SecurityEdiscoveryCustodian|null
     */
    private function deserializeGet(string $body): SecurityEdiscoveryCustodian|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityEdiscoveryCustodian($data);
    }
    /**
     * Update the navigation property custodians in security
     * @param SecurityEdiscoveryCustodian $body Request body
     * @return SecurityEdiscoveryCustodian|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityEdiscoveryCustodian $body): SecurityEdiscoveryCustodian|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityEdiscoveryCustodian|null
     */
    private function deserializePatch(string $body): SecurityEdiscoveryCustodian|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new SecurityEdiscoveryCustodian($data);
    }
    /**
     * Delete navigation property custodians for security
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
    /**
     * Navigate to lastIndexOperation
     *
     * @return LastIndexOperationRequestBuilder
     */
    public function lastIndexOperation(): LastIndexOperationRequestBuilder
    {
        return new LastIndexOperationRequestBuilder($this->client, $this->requestUrl . '/lastIndexOperation');
    }
    /**
     * Navigate to microsoft.graph.security.activate
     *
     * @return SecurityActivateRequestBuilder
     */
    public function securityActivate(): SecurityActivateRequestBuilder
    {
        return new SecurityActivateRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.activate');
    }
    /**
     * Navigate to microsoft.graph.security.applyHold
     *
     * @return SecurityApplyHoldRequestBuilder
     */
    public function securityApplyHold(): SecurityApplyHoldRequestBuilder
    {
        return new SecurityApplyHoldRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.applyHold');
    }
    /**
     * Navigate to microsoft.graph.security.release
     *
     * @return SecurityReleaseRequestBuilder
     */
    public function securityRelease(): SecurityReleaseRequestBuilder
    {
        return new SecurityReleaseRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.release');
    }
    /**
     * Navigate to microsoft.graph.security.removeHold
     *
     * @return SecurityRemoveHoldRequestBuilder
     */
    public function securityRemoveHold(): SecurityRemoveHoldRequestBuilder
    {
        return new SecurityRemoveHoldRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.removeHold');
    }
    /**
     * Navigate to microsoft.graph.security.updateIndex
     *
     * @return SecurityUpdateIndexRequestBuilder
     */
    public function securityUpdateIndex(): SecurityUpdateIndexRequestBuilder
    {
        return new SecurityUpdateIndexRequestBuilder($this->client, $this->requestUrl . '/microsoft.graph.security.updateIndex');
    }
    /**
     * Navigate to siteSources
     *
     * @return SiteSourcesRequestBuilder
     */
    public function siteSources(): SiteSourcesRequestBuilder
    {
        return new SiteSourcesRequestBuilder($this->client, $this->requestUrl . '/siteSources');
    }
    /**
     * Navigate to unifiedGroupSources
     *
     * @return UnifiedGroupSourcesRequestBuilder
     */
    public function unifiedGroupSources(): UnifiedGroupSourcesRequestBuilder
    {
        return new UnifiedGroupSourcesRequestBuilder($this->client, $this->requestUrl . '/unifiedGroupSources');
    }
    /**
     * Navigate to userSources
     *
     * @return UserSourcesRequestBuilder
     */
    public function userSources(): UserSourcesRequestBuilder
    {
        return new UserSourcesRequestBuilder($this->client, $this->requestUrl . '/userSources');
    }
}
