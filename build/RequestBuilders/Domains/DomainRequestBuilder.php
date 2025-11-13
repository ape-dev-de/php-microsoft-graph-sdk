<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Domain;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\DomainNameReferencesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\FederationConfigurationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\ForceDeleteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\PromoteRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\VerifyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\RootDomainRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\ServiceConfigurationRecordsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Domains\VerificationDnsRecordsRequestBuilder;

/**
 * Request builder for /domains/{domain-id}
 */
class DomainRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get domain
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Domain|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Domain|null
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
     * Deserialize response to Domain|null
     */
    private function deserializeGet(string $body): Domain|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Domain($data);
    }
    /**
     * Update domain
     * @param Domain $body Request body
     * @return Domain|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Domain $body): Domain|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Domain|null
     */
    private function deserializePatch(string $body): Domain|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Domain($data);
    }
    /**
     * Delete domain
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
     * Navigate to domainNameReferences
     *
     * @return DomainNameReferencesRequestBuilder
     */
    public function domainNameReferences(): DomainNameReferencesRequestBuilder
    {
        return new DomainNameReferencesRequestBuilder($this->client, $this->requestUrl . '/domainNameReferences');
    }
    /**
     * Navigate to federationConfiguration
     *
     * @return FederationConfigurationRequestBuilder
     */
    public function federationConfiguration(): FederationConfigurationRequestBuilder
    {
        return new FederationConfigurationRequestBuilder($this->client, $this->requestUrl . '/federationConfiguration');
    }
    /**
     * Navigate to forceDelete
     *
     * @return ForceDeleteRequestBuilder
     */
    public function forceDelete(): ForceDeleteRequestBuilder
    {
        return new ForceDeleteRequestBuilder($this->client, $this->requestUrl . '/forceDelete');
    }
    /**
     * Navigate to promote
     *
     * @return PromoteRequestBuilder
     */
    public function promote(): PromoteRequestBuilder
    {
        return new PromoteRequestBuilder($this->client, $this->requestUrl . '/promote');
    }
    /**
     * Navigate to verify
     *
     * @return VerifyRequestBuilder
     */
    public function verify(): VerifyRequestBuilder
    {
        return new VerifyRequestBuilder($this->client, $this->requestUrl . '/verify');
    }
    /**
     * Navigate to rootDomain
     *
     * @return RootDomainRequestBuilder
     */
    public function rootDomain(): RootDomainRequestBuilder
    {
        return new RootDomainRequestBuilder($this->client, $this->requestUrl . '/rootDomain');
    }
    /**
     * Navigate to serviceConfigurationRecords
     *
     * @return ServiceConfigurationRecordsRequestBuilder
     */
    public function serviceConfigurationRecords(): ServiceConfigurationRecordsRequestBuilder
    {
        return new ServiceConfigurationRecordsRequestBuilder($this->client, $this->requestUrl . '/serviceConfigurationRecords');
    }
    /**
     * Navigate to verificationDnsRecords
     *
     * @return VerificationDnsRecordsRequestBuilder
     */
    public function verificationDnsRecords(): VerificationDnsRecordsRequestBuilder
    {
        return new VerificationDnsRecordsRequestBuilder($this->client, $this->requestUrl . '/verificationDnsRecords');
    }
}
