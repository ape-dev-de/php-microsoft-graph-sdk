<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationRoot
 */
class AttackSimulationRoot
{
    /**
     * Represents an end user's notification for an attack simulation training.
     */
    private array $endUserNotifications = [];

    /**
     * Represents an attack simulation training landing page.
     */
    private array $landingPages = [];

    /**
     * Represents an attack simulation training login page.
     */
    private array $loginPages = [];

    /**
     * Represents an attack simulation training operation.
     */
    private array $operations = [];

    /**
     * Represents an attack simulation training campaign payload in a tenant.
     */
    private array $payloads = [];

    /**
     * Represents simulation automation created to run on a tenant.
     */
    private array $simulationAutomations = [];

    /**
     * Represents an attack simulation training campaign in a tenant.
     */
    private array $simulations = [];

    /**
     * Represents details about attack simulation trainings.
     * @var string[]
     */
    private array $trainings = [];


    public function getEndUserNotifications(): array
    {
        return $this->endUserNotifications;
    }

    public function setEndUserNotifications(array $endUserNotifications): self
    {
        $this->endUserNotifications = $endUserNotifications;
        return $this;
    }

    public function getLandingPages(): array
    {
        return $this->landingPages;
    }

    public function setLandingPages(array $landingPages): self
    {
        $this->landingPages = $landingPages;
        return $this;
    }

    public function getLoginPages(): array
    {
        return $this->loginPages;
    }

    public function setLoginPages(array $loginPages): self
    {
        $this->loginPages = $loginPages;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getPayloads(): array
    {
        return $this->payloads;
    }

    public function setPayloads(array $payloads): self
    {
        $this->payloads = $payloads;
        return $this;
    }

    public function getSimulationAutomations(): array
    {
        return $this->simulationAutomations;
    }

    public function setSimulationAutomations(array $simulationAutomations): self
    {
        $this->simulationAutomations = $simulationAutomations;
        return $this;
    }

    public function getSimulations(): array
    {
        return $this->simulations;
    }

    public function setSimulations(array $simulations): self
    {
        $this->simulations = $simulations;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTrainings(): array
    {
        return $this->trainings;
    }

    /**
     * @param string[] $trainings
     */
    public function setTrainings(array $trainings): self
    {
        $this->trainings = $trainings;
        return $this;
    }

}
