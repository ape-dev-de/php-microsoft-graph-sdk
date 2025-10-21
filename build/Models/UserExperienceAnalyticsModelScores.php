<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsModelScores
 */
class UserExperienceAnalyticsModelScores
{
    /**
     * Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $appReliabilityScore;

    /**
     * Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $batteryHealthScore;

    /**
     * Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $endpointAnalyticsScore;

    /**
     */
    private ?string $healthStatus;

    /**
     * The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $manufacturer;

    /**
     * The model name of the device. Supports: $select, $OrderBy. Read-only.
     */
    private ?string $model;

    /**
     * Indicates unique devices count of given model in a consolidated report. Supports: $select, $OrderBy. Read-only. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     */
    private ?float $modelDeviceCount;

    /**
     * Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     */
    private ?string $startupPerformanceScore;

    /**
     * The user experience analytics model scores entity consolidates the various Endpoint Analytics scores.
     */
    private ?string $workFromAnywhereScore;


    public function getAppReliabilityScore(): ?string
    {
        return $this->appReliabilityScore;
    }

    public function setAppReliabilityScore(?string $appReliabilityScore): self
    {
        $this->appReliabilityScore = $appReliabilityScore;
        return $this;
    }

    public function getBatteryHealthScore(): ?string
    {
        return $this->batteryHealthScore;
    }

    public function setBatteryHealthScore(?string $batteryHealthScore): self
    {
        $this->batteryHealthScore = $batteryHealthScore;
        return $this;
    }

    public function getEndpointAnalyticsScore(): ?string
    {
        return $this->endpointAnalyticsScore;
    }

    public function setEndpointAnalyticsScore(?string $endpointAnalyticsScore): self
    {
        $this->endpointAnalyticsScore = $endpointAnalyticsScore;
        return $this;
    }

    public function getHealthStatus(): ?string
    {
        return $this->healthStatus;
    }

    public function setHealthStatus(?string $healthStatus): self
    {
        $this->healthStatus = $healthStatus;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getModelDeviceCount(): ?float
    {
        return $this->modelDeviceCount;
    }

    public function setModelDeviceCount(?float $modelDeviceCount): self
    {
        $this->modelDeviceCount = $modelDeviceCount;
        return $this;
    }

    public function getStartupPerformanceScore(): ?string
    {
        return $this->startupPerformanceScore;
    }

    public function setStartupPerformanceScore(?string $startupPerformanceScore): self
    {
        $this->startupPerformanceScore = $startupPerformanceScore;
        return $this;
    }

    public function getWorkFromAnywhereScore(): ?string
    {
        return $this->workFromAnywhereScore;
    }

    public function setWorkFromAnywhereScore(?string $workFromAnywhereScore): self
    {
        $this->workFromAnywhereScore = $workFromAnywhereScore;
        return $this;
    }

}
