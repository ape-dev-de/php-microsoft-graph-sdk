<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AttackSimulationRoot;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\EndUserNotificationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\LandingPagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\LoginPagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\OperationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\PayloadsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\SimulationAutomationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\SimulationsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\AttackSimulation\TrainingsRequestBuilder;

/**
 * Request builder for /security/attackSimulation
 */
class AttackSimulationRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get attackSimulation from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AttackSimulationRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AttackSimulationRoot
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
     * Deserialize response to AttackSimulationRoot
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
        return new AttackSimulationRoot($data);
    }
    /**
     * Update the navigation property attackSimulation in security
     * @param AttackSimulationRoot $body Request body
     * @return AttackSimulationRoot
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(AttackSimulationRoot $body): AttackSimulationRoot
    {
        // Get raw data from model
        $bodyData = method_exists($body, 'getRaw') ? $body->getRaw() : json_encode(json_decode($body, true));
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to AttackSimulationRoot
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
        return new AttackSimulationRoot($data);
    }
    /**
     * Delete navigation property attackSimulation for security
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
    private function deserializeDelete(string $body): mixed
    {
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
     * Navigate to endUserNotifications
     *
     * @return EndUserNotificationsRequestBuilder
     */
    public function endUserNotifications(): EndUserNotificationsRequestBuilder
    {
        return new EndUserNotificationsRequestBuilder($this->client, $this->requestUrl . '/endUserNotifications');
    }
    /**
     * Navigate to landingPages
     *
     * @return LandingPagesRequestBuilder
     */
    public function landingPages(): LandingPagesRequestBuilder
    {
        return new LandingPagesRequestBuilder($this->client, $this->requestUrl . '/landingPages');
    }
    /**
     * Navigate to loginPages
     *
     * @return LoginPagesRequestBuilder
     */
    public function loginPages(): LoginPagesRequestBuilder
    {
        return new LoginPagesRequestBuilder($this->client, $this->requestUrl . '/loginPages');
    }
    /**
     * Navigate to operations
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->requestUrl . '/operations');
    }
    /**
     * Navigate to payloads
     *
     * @return PayloadsRequestBuilder
     */
    public function payloads(): PayloadsRequestBuilder
    {
        return new PayloadsRequestBuilder($this->client, $this->requestUrl . '/payloads');
    }
    /**
     * Navigate to simulationAutomations
     *
     * @return SimulationAutomationsRequestBuilder
     */
    public function simulationAutomations(): SimulationAutomationsRequestBuilder
    {
        return new SimulationAutomationsRequestBuilder($this->client, $this->requestUrl . '/simulationAutomations');
    }
    /**
     * Navigate to simulations
     *
     * @return SimulationsRequestBuilder
     */
    public function simulations(): SimulationsRequestBuilder
    {
        return new SimulationsRequestBuilder($this->client, $this->requestUrl . '/simulations');
    }
    /**
     * Navigate to trainings
     *
     * @return TrainingsRequestBuilder
     */
    public function trainings(): TrainingsRequestBuilder
    {
        return new TrainingsRequestBuilder($this->client, $this->requestUrl . '/trainings');
    }
}
