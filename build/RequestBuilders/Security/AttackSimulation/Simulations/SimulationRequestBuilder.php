<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\Simulations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\Simulation;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\Simulations\LandingPageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\Simulations\LoginPageRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\Simulations\PayloadRequestBuilder;

/**
 * Request builder for /security/attackSimulation/simulations/{simulation-id}
 */
class SimulationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get simulation
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return Simulation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): Simulation|null
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
     * Deserialize response to Simulation|null
     */
    private function deserializeGet(string $body): Simulation|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Simulation($data);
    }
    /**
     * Update simulation
     * @param Simulation $body Request body
     * @return Simulation|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(Simulation $body): Simulation|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to Simulation|null
     */
    private function deserializePatch(string $body): Simulation|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new Simulation($data);
    }
    /**
     * Delete simulation
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
     * Navigate to landingPage
     *
     * @return LandingPageRequestBuilder
     */
    public function landingPage(): LandingPageRequestBuilder
    {
        return new LandingPageRequestBuilder($this->client, $this->requestUrl . '/landingPage');
    }
    /**
     * Navigate to loginPage
     *
     * @return LoginPageRequestBuilder
     */
    public function loginPage(): LoginPageRequestBuilder
    {
        return new LoginPageRequestBuilder($this->client, $this->requestUrl . '/loginPage');
    }
    /**
     * Navigate to payload
     *
     * @return PayloadRequestBuilder
     */
    public function payload(): PayloadRequestBuilder
    {
        return new PayloadRequestBuilder($this->client, $this->requestUrl . '/payload');
    }
}
