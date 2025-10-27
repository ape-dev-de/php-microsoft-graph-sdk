<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsSummarizedBy - Enum
 * Indicates type of summarization. Possible values are: None, Model, AllRegressions, ModelRegression, ManufacturerRegression, OperatingSystemVersionRegression.
 */
enum UserExperienceAnalyticsSummarizedBy: string
{
    case NONE = 'none';
    case MODEL = 'model';
    case ALLREGRESSIONS = 'allRegressions';
    case MODELREGRESSION = 'modelRegression';
    case MANUFACTURERREGRESSION = 'manufacturerRegression';
    case OPERATINGSYSTEMVERSIONREGRESSION = 'operatingSystemVersionRegression';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
