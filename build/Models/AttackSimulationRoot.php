<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationRoot
 */
class AttackSimulationRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents an end user's notification for an attack simulation training.
     * @var EndUserNotification[]
     */
    public array $endUserNotifications = [];

    /** 
     * Represents an attack simulation training landing page.
     * @var LandingPage[]
     */
    public array $landingPages = [];

    /** 
     * Represents an attack simulation training login page.
     * @var LoginPage[]
     */
    public array $loginPages = [];

    /** 
     * Represents an attack simulation training operation.
     * @var AttackSimulationOperation[]
     */
    public array $operations = [];

    /** 
     * Represents an attack simulation training campaign payload in a tenant.
     * @var Payload[]
     */
    public array $payloads = [];

    /** 
     * Represents simulation automation created to run on a tenant.
     * @var SimulationAutomation[]
     */
    public array $simulationAutomations = [];

    /** 
     * Represents an attack simulation training campaign in a tenant.
     * @var Simulation[]
     */
    public array $simulations = [];

    /** 
     * Represents details about attack simulation trainings.
     * @var Training[]
     */
    public array $trainings = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['endUserNotifications'])) {
            $this->endUserNotifications = $data['endUserNotifications'];
        }
        if (isset($data['landingPages'])) {
            $this->landingPages = $data['landingPages'];
        }
        if (isset($data['loginPages'])) {
            $this->loginPages = $data['loginPages'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['payloads'])) {
            $this->payloads = $data['payloads'];
        }
        if (isset($data['simulationAutomations'])) {
            $this->simulationAutomations = $data['simulationAutomations'];
        }
        if (isset($data['simulations'])) {
            $this->simulations = $data['simulations'];
        }
        if (isset($data['trainings'])) {
            $this->trainings = $data['trainings'];
        }
    }
}
