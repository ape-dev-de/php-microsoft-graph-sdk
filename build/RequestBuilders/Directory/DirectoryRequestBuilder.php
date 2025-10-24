<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Directory;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\AdministrativeUnitsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\AttributeSetsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\CustomSecurityAttributeDefinitionsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeletedItemsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\DeviceLocalCredentialsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\FederationConfigurationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\OnPremisesSynchronizationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\PublicKeyInfrastructureRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Directory\Directory\SubscriptionsRequestBuilder;

/**
 * Request builder for /directory
 */
class DirectoryRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get directory
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Directory
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Directory
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
     * Deserialize response to Directory
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Directory($data);
    }
    /**
     * Update directory
     * @param Directory $body Request body
     * @return Directory
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Directory $body): Directory
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Directory
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new Directory($data);
    }
    /**
     * Navigate to administrativeUnits
     *
     * @return AdministrativeUnitsRequestBuilder
     */
    public function administrativeUnits(): AdministrativeUnitsRequestBuilder
    {
        return new AdministrativeUnitsRequestBuilder($this->client, $this->requestUrl . '/administrativeUnits');
    }
    /**
     * Navigate to attributeSets
     *
     * @return AttributeSetsRequestBuilder
     */
    public function attributeSets(): AttributeSetsRequestBuilder
    {
        return new AttributeSetsRequestBuilder($this->client, $this->requestUrl . '/attributeSets');
    }
    /**
     * Navigate to customSecurityAttributeDefinitions
     *
     * @return CustomSecurityAttributeDefinitionsRequestBuilder
     */
    public function customSecurityAttributeDefinitions(): CustomSecurityAttributeDefinitionsRequestBuilder
    {
        return new CustomSecurityAttributeDefinitionsRequestBuilder($this->client, $this->requestUrl . '/customSecurityAttributeDefinitions');
    }
    /**
     * Navigate to deletedItems
     *
     * @return DeletedItemsRequestBuilder
     */
    public function deletedItems(): DeletedItemsRequestBuilder
    {
        return new DeletedItemsRequestBuilder($this->client, $this->requestUrl . '/deletedItems');
    }
    /**
     * Navigate to deviceLocalCredentials
     *
     * @return DeviceLocalCredentialsRequestBuilder
     */
    public function deviceLocalCredentials(): DeviceLocalCredentialsRequestBuilder
    {
        return new DeviceLocalCredentialsRequestBuilder($this->client, $this->requestUrl . '/deviceLocalCredentials');
    }
    /**
     * Navigate to federationConfigurations
     *
     * @return FederationConfigurationsRequestBuilder
     */
    public function federationConfigurations(): FederationConfigurationsRequestBuilder
    {
        return new FederationConfigurationsRequestBuilder($this->client, $this->requestUrl . '/federationConfigurations');
    }
    /**
     * Navigate to onPremisesSynchronization
     *
     * @return OnPremisesSynchronizationRequestBuilder
     */
    public function onPremisesSynchronization(): OnPremisesSynchronizationRequestBuilder
    {
        return new OnPremisesSynchronizationRequestBuilder($this->client, $this->requestUrl . '/onPremisesSynchronization');
    }
    /**
     * Navigate to publicKeyInfrastructure
     *
     * @return PublicKeyInfrastructureRequestBuilder
     */
    public function publicKeyInfrastructure(): PublicKeyInfrastructureRequestBuilder
    {
        return new PublicKeyInfrastructureRequestBuilder($this->client, $this->requestUrl . '/publicKeyInfrastructure');
    }
    /**
     * Navigate to subscriptions
     *
     * @return SubscriptionsRequestBuilder
     */
    public function subscriptions(): SubscriptionsRequestBuilder
    {
        return new SubscriptionsRequestBuilder($this->client, $this->requestUrl . '/subscriptions');
    }
}
