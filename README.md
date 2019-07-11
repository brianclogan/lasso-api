# Lasso API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/collingmedia/lasso-api.svg?style=for-the-badge)](https://packagist.org/packages/collingmedia/lasso-api)
[![Build Status](https://img.shields.io/travis/colling-media/lasso-api/master.svg?style=for-the-badge)](https://travis-ci.org/colling-media/lasso-api)
[![StyleCI](https://styleci.io/repos/196468636/shield)](https://styleci.io/repos/196468636)
[![Total Downloads](https://img.shields.io/packagist/dt/collingmedia/lasso-api.svg?style=for-the-badge)](https://packagist.org/packages/collingmedia/lasso-api)

Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`

## Requirements

PHP 7.0 and later

## Installation & Usage
### Composer

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/lasso-api/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inventoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.lassocrm.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryApi* | [**inventoryGet**](docs/Api/InventoryApi.md#inventoryget) | **GET** /inventory | Returns a list of all inventories
*InventoryApi* | [**inventoryInventoryIdDelete**](docs/Api/InventoryApi.md#inventoryinventoryiddelete) | **DELETE** /inventory/{inventoryId} | Delete an inventory
*InventoryApi* | [**inventoryInventoryIdGet**](docs/Api/InventoryApi.md#inventoryinventoryidget) | **GET** /inventory/{inventoryId} | Get a single inventory
*InventoryApi* | [**inventoryInventoryIdPut**](docs/Api/InventoryApi.md#inventoryinventoryidput) | **PUT** /inventory/{inventoryId} | Update an inventory
*InventoryApi* | [**inventoryInventoryIdResetPost**](docs/Api/InventoryApi.md#inventoryinventoryidresetpost) | **POST** /inventory/{inventoryId}/reset | Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.
*InventoryApi* | [**inventoryInventoryIdSyncPut**](docs/Api/InventoryApi.md#inventoryinventoryidsyncput) | **PUT** /inventory/{inventoryId}/sync | Sync an inventory
*InventoryApi* | [**inventoryPost**](docs/Api/InventoryApi.md#inventorypost) | **POST** /inventory | Create an inventory
*InventoryApi* | [**inventorySearchGet**](docs/Api/InventoryApi.md#inventorysearchget) | **GET** /inventory/search | Search inventories by strataLot and inventoryNumber.
*InventoryDatesApi* | [**inventoryInventoryIdDatesGet**](docs/Api/InventoryDatesApi.md#inventoryinventoryiddatesget) | **GET** /inventory/{inventoryId}/dates | 
*InventoryDatesApi* | [**inventoryInventoryIdDatesPut**](docs/Api/InventoryDatesApi.md#inventoryinventoryiddatesput) | **PUT** /inventory/{inventoryId}/dates | 
*InventoryPlanTypesApi* | [**inventoryInventoryIdPlansGet**](docs/Api/InventoryPlanTypesApi.md#inventoryinventoryidplansget) | **GET** /inventory/{inventoryId}/plans | 
*InventoryPlanTypesApi* | [**inventoryInventoryIdPlansPut**](docs/Api/InventoryPlanTypesApi.md#inventoryinventoryidplansput) | **PUT** /inventory/{inventoryId}/plans | 
*InventoryPlanTypesApi* | [**inventoryPlansGet**](docs/Api/InventoryPlanTypesApi.md#inventoryplansget) | **GET** /inventory/plans | 
*InventoryPlanTypesApi* | [**inventoryPlansPlanTypeIdGet**](docs/Api/InventoryPlanTypesApi.md#inventoryplansplantypeidget) | **GET** /inventory/plans/{planTypeId} | 
*InventoryPlanTypesApi* | [**inventoryPlansPlanTypeIdPut**](docs/Api/InventoryPlanTypesApi.md#inventoryplansplantypeidput) | **PUT** /inventory/plans/{planTypeId} | 
*InventoryPlanTypesApi* | [**inventoryPlansPost**](docs/Api/InventoryPlanTypesApi.md#inventoryplanspost) | **POST** /inventory/plans | 
*InventoryPricingApi* | [**inventoryInventoryIdPricingGet**](docs/Api/InventoryPricingApi.md#inventoryinventoryidpricingget) | **GET** /inventory/{inventoryId}/pricing | 
*InventoryPricingApi* | [**inventoryInventoryIdPricingPut**](docs/Api/InventoryPricingApi.md#inventoryinventoryidpricingput) | **PUT** /inventory/{inventoryId}/pricing | 
*InventoryPricingRevisionsApi* | [**inventoryInventoryIdPricingRevisionsGet**](docs/Api/InventoryPricingRevisionsApi.md#inventoryinventoryidpricingrevisionsget) | **GET** /inventory/{inventoryId}/pricing-revisions | 
*InventoryPricingRevisionsApi* | [**inventoryInventoryIdPricingRevisionsPost**](docs/Api/InventoryPricingRevisionsApi.md#inventoryinventoryidpricingrevisionspost) | **POST** /inventory/{inventoryId}/pricing-revisions | 
*InventoryPurchasersApi* | [**inventoryInventoryIdPurchasersGet**](docs/Api/InventoryPurchasersApi.md#inventoryinventoryidpurchasersget) | **GET** /inventory/{inventoryId}/purchasers | 
*InventoryPurchasersApi* | [**inventoryInventoryIdPurchasersPut**](docs/Api/InventoryPurchasersApi.md#inventoryinventoryidpurchasersput) | **PUT** /inventory/{inventoryId}/purchasers | 
*ProjectApi* | [**projectsSettingsGet**](docs/Api/ProjectApi.md#projectssettingsget) | **GET** /projects/settings | Retrieve a project&#39;s settings
*RegistrantApi* | [**registrantsGet**](docs/Api/RegistrantApi.md#registrantsget) | **GET** /registrants | List of registrants for a project.
*RegistrantApi* | [**registrantsPost**](docs/Api/RegistrantApi.md#registrantspost) | **POST** /registrants | Create a registrant
*RegistrantApi* | [**registrantsRegistrantIdGet**](docs/Api/RegistrantApi.md#registrantsregistrantidget) | **GET** /registrants/{registrantId} | Extended data for a registrant
*RegistrantApi* | [**registrantsRegistrantIdPut**](docs/Api/RegistrantApi.md#registrantsregistrantidput) | **PUT** /registrants/{registrantId} | 
*RegistrantApi* | [**registrantsSearchGet**](docs/Api/RegistrantApi.md#registrantssearchget) | **GET** /registrants/search | Search registrants by name, email, phone, nickname, externalId, rating or creation date.
*RegistrantAssignedSalesRepsApi* | [**registrantsRegistrantIdAssignedSalesRepsGet**](docs/Api/RegistrantAssignedSalesRepsApi.md#registrantsregistrantidassignedsalesrepsget) | **GET** /registrants/{registrantId}/assigned-sales-reps | 
*RegistrantAssignedSalesRepsApi* | [**registrantsRegistrantIdAssignedSalesRepsPut**](docs/Api/RegistrantAssignedSalesRepsApi.md#registrantsregistrantidassignedsalesrepsput) | **PUT** /registrants/{registrantId}/assigned-sales-reps | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdAddressesAddressIdDelete**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidaddressesaddressiddelete) | **DELETE** /registrants/{registrantId}/addresses/{addressId} | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdAddressesAddressIdPut**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidaddressesaddressidput) | **PUT** /registrants/{registrantId}/addresses/{addressId} | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdAddressesPost**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidaddressespost) | **POST** /registrants/{registrantId}/addresses | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdEmailsEmailIdDelete**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidemailsemailiddelete) | **DELETE** /registrants/{registrantId}/emails/{emailId} | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdEmailsEmailIdPut**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidemailsemailidput) | **PUT** /registrants/{registrantId}/emails/{emailId} | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdEmailsPost**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidemailspost) | **POST** /registrants/{registrantId}/emails | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdPersonContactInformationGet**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidpersoncontactinformationget) | **GET** /registrants/{registrantId}/person/contact-information | Retrieve all of a registrant&#39;s contact information
*RegistrantContactInformationApi* | [**registrantsRegistrantIdPersonContactInformationPut**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidpersoncontactinformationput) | **PUT** /registrants/{registrantId}/person/contact-information | Convenience method to update all of a registrant&#39;s contact information in a single call
*RegistrantContactInformationApi* | [**registrantsRegistrantIdPhonesPhoneIdDelete**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidphonesphoneiddelete) | **DELETE** /registrants/{registrantId}/phones/{phoneId} | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdPhonesPhoneIdPut**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidphonesphoneidput) | **PUT** /registrants/{registrantId}/phones/{phoneId} | 
*RegistrantContactInformationApi* | [**registrantsRegistrantIdPhonesPost**](docs/Api/RegistrantContactInformationApi.md#registrantsregistrantidphonespost) | **POST** /registrants/{registrantId}/phones | 
*RegistrantHistoryApi* | [**registrantsRegistrantIdHistoriesHistoryIdGet**](docs/Api/RegistrantHistoryApi.md#registrantsregistrantidhistorieshistoryidget) | **GET** /registrants/{registrantId}/histories/{historyId} | 
*RegistrantHistoryApi* | [**registrantsRegistrantIdHistoriesHistoryIdPut**](docs/Api/RegistrantHistoryApi.md#registrantsregistrantidhistorieshistoryidput) | **PUT** /registrants/{registrantId}/histories/{historyId} | 
*RegistrantHistoryApi* | [**registrantsRegistrantIdHistoriesPost**](docs/Api/RegistrantHistoryApi.md#registrantsregistrantidhistoriespost) | **POST** /registrants/{registrantId}/histories | 
*RegistrantIntegrationsApi* | [**registrantsRegistrantIdExternalExternalIdDelete**](docs/Api/RegistrantIntegrationsApi.md#registrantsregistrantidexternalexternaliddelete) | **DELETE** /registrants/{registrantId}/external/{externalId} | 
*RegistrantIntegrationsApi* | [**registrantsRegistrantIdIntegrationsDelete**](docs/Api/RegistrantIntegrationsApi.md#registrantsregistrantidintegrationsdelete) | **DELETE** /registrants/{registrantId}/integrations | 
*RegistrantIntegrationsApi* | [**registrantsRegistrantIdIntegrationsPost**](docs/Api/RegistrantIntegrationsApi.md#registrantsregistrantidintegrationspost) | **POST** /registrants/{registrantId}/integrations | 
*RegistrantNotesApi* | [**registrantsRegistrantIdNotesNoteIdDelete**](docs/Api/RegistrantNotesApi.md#registrantsregistrantidnotesnoteiddelete) | **DELETE** /registrants/{registrantId}/notes/{noteId} | 
*RegistrantNotesApi* | [**registrantsRegistrantIdNotesPost**](docs/Api/RegistrantNotesApi.md#registrantsregistrantidnotespost) | **POST** /registrants/{registrantId}/notes | 
*RegistrantQuestionAnswersApi* | [**registrantsRegistrantIdQuestionsPost**](docs/Api/RegistrantQuestionAnswersApi.md#registrantsregistrantidquestionspost) | **POST** /registrants/{registrantId}/questions | 
*RegistrantQuestionAnswersApi* | [**registrantsRegistrantIdQuestionsQuestionIdPut**](docs/Api/RegistrantQuestionAnswersApi.md#registrantsregistrantidquestionsquestionidput) | **PUT** /registrants/{registrantId}/questions/{questionId} | 
*RegistrantRelationshipsApi* | [**registrantsRegistrantIdRelationshipsPost**](docs/Api/RegistrantRelationshipsApi.md#registrantsregistrantidrelationshipspost) | **POST** /registrants/{registrantId}/relationships | 
*RegistrantRelationshipsApi* | [**registrantsRegistrantIdRelationshipsRelationshipIdDelete**](docs/Api/RegistrantRelationshipsApi.md#registrantsregistrantidrelationshipsrelationshipiddelete) | **DELETE** /registrants/{registrantId}/relationships/{relationshipId} | 
*RegistrantRelationshipsApi* | [**registrantsRegistrantIdRelationshipsRelationshipIdPut**](docs/Api/RegistrantRelationshipsApi.md#registrantsregistrantidrelationshipsrelationshipidput) | **PUT** /registrants/{registrantId}/relationships/{relationshipId} | 
*RegistrantSalesDetailsApi* | [**registrantsRegistrantIdFollowUpProcessPut**](docs/Api/RegistrantSalesDetailsApi.md#registrantsregistrantidfollowupprocessput) | **PUT** /registrants/{registrantId}/follow-up-process | 
*RegistrantSalesDetailsApi* | [**registrantsRegistrantIdRatingPut**](docs/Api/RegistrantSalesDetailsApi.md#registrantsregistrantidratingput) | **PUT** /registrants/{registrantId}/rating | 
*RegistrantSalesDetailsApi* | [**registrantsRegistrantIdSecondarySourceTypePut**](docs/Api/RegistrantSalesDetailsApi.md#registrantsregistrantidsecondarysourcetypeput) | **PUT** /registrants/{registrantId}/secondary-source-type | 
*RegistrantSalesDetailsApi* | [**registrantsRegistrantIdSourceTypePut**](docs/Api/RegistrantSalesDetailsApi.md#registrantsregistrantidsourcetypeput) | **PUT** /registrants/{registrantId}/source-type | 


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressRead](docs/Model/AddressRead.md)
 - [AddressWrite](docs/Model/AddressWrite.md)
 - [Answer](docs/Model/Answer.md)
 - [Answer1](docs/Model/Answer1.md)
 - [AuthForbidden](docs/Model/AuthForbidden.md)
 - [BicycleLocker](docs/Model/BicycleLocker.md)
 - [Component](docs/Model/Component.md)
 - [ContactInformation](docs/Model/ContactInformation.md)
 - [Creator](docs/Model/Creator.md)
 - [Dates](docs/Model/Dates.md)
 - [DatesLinks](docs/Model/DatesLinks.md)
 - [Deposit](docs/Model/Deposit.md)
 - [Email](docs/Model/Email.md)
 - [EmailRead](docs/Model/EmailRead.md)
 - [EmailWrite](docs/Model/EmailWrite.md)
 - [ErrorInventoryAlreadySynced](docs/Model/ErrorInventoryAlreadySynced.md)
 - [ErrorInventoryCannotBeDeleted](docs/Model/ErrorInventoryCannotBeDeleted.md)
 - [ErrorInventoryNotFound](docs/Model/ErrorInventoryNotFound.md)
 - [ErrorLimitReached](docs/Model/ErrorLimitReached.md)
 - [ErrorPurchaserNotFound](docs/Model/ErrorPurchaserNotFound.md)
 - [ErrorStorageSupplyExhausted](docs/Model/ErrorStorageSupplyExhausted.md)
 - [ExternalId](docs/Model/ExternalId.md)
 - [FollowUpProcess](docs/Model/FollowUpProcess.md)
 - [HistoryRead](docs/Model/HistoryRead.md)
 - [HistoryReadFull](docs/Model/HistoryReadFull.md)
 - [HistoryWithoutContent](docs/Model/HistoryWithoutContent.md)
 - [HistoryWithoutContentLinks](docs/Model/HistoryWithoutContentLinks.md)
 - [HistoryWrite](docs/Model/HistoryWrite.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001Items](docs/Model/InlineResponse2001Items.md)
 - [InlineResponse2001Links](docs/Model/InlineResponse2001Links.md)
 - [InlineResponse200Links](docs/Model/InlineResponse200Links.md)
 - [InvalidSubResourceAction](docs/Model/InvalidSubResourceAction.md)
 - [Inventory](docs/Model/Inventory.md)
 - [InventoryCreate](docs/Model/InventoryCreate.md)
 - [InventoryFull](docs/Model/InventoryFull.md)
 - [InventoryLinks](docs/Model/InventoryLinks.md)
 - [InventoryPlanTypeWrite](docs/Model/InventoryPlanTypeWrite.md)
 - [InventoryRead](docs/Model/InventoryRead.md)
 - [InventorySync](docs/Model/InventorySync.md)
 - [InventoryUpdate](docs/Model/InventoryUpdate.md)
 - [Note](docs/Model/Note.md)
 - [Option](docs/Model/Option.md)
 - [ParkingStall](docs/Model/ParkingStall.md)
 - [Phone](docs/Model/Phone.md)
 - [PhoneRead](docs/Model/PhoneRead.md)
 - [PhoneWrite](docs/Model/PhoneWrite.md)
 - [PlanTypeRead](docs/Model/PlanTypeRead.md)
 - [PlanTypeWrite](docs/Model/PlanTypeWrite.md)
 - [Pricing](docs/Model/Pricing.md)
 - [PricingLinks](docs/Model/PricingLinks.md)
 - [PricingRevision](docs/Model/PricingRevision.md)
 - [Project](docs/Model/Project.md)
 - [ProjectRating](docs/Model/ProjectRating.md)
 - [ProjectRotation](docs/Model/ProjectRotation.md)
 - [ProjectSalesRep](docs/Model/ProjectSalesRep.md)
 - [ProjectSecondarySourceType](docs/Model/ProjectSecondarySourceType.md)
 - [ProjectSettings](docs/Model/ProjectSettings.md)
 - [ProjectSourceType](docs/Model/ProjectSourceType.md)
 - [ProjectWebsiteTracking](docs/Model/ProjectWebsiteTracking.md)
 - [Purchaser](docs/Model/Purchaser.md)
 - [PurchaserCreate](docs/Model/PurchaserCreate.md)
 - [Question](docs/Model/Question.md)
 - [Rating](docs/Model/Rating.md)
 - [Realtor](docs/Model/Realtor.md)
 - [RealtorCompensation](docs/Model/RealtorCompensation.md)
 - [RealtorCompensationCutOff](docs/Model/RealtorCompensationCutOff.md)
 - [RealtorCompensationPercentages](docs/Model/RealtorCompensationPercentages.md)
 - [Registrant](docs/Model/Registrant.md)
 - [RegistrantNoteRead](docs/Model/RegistrantNoteRead.md)
 - [RegistrantNoteWrite](docs/Model/RegistrantNoteWrite.md)
 - [RegistrantNoteWriteLinks](docs/Model/RegistrantNoteWriteLinks.md)
 - [RegistrantPersonalInfo](docs/Model/RegistrantPersonalInfo.md)
 - [RegistrantRead](docs/Model/RegistrantRead.md)
 - [RegistrantRelationshipCreate](docs/Model/RegistrantRelationshipCreate.md)
 - [RegistrantRelationshipRead](docs/Model/RegistrantRelationshipRead.md)
 - [RegistrantRelationshipUpdate](docs/Model/RegistrantRelationshipUpdate.md)
 - [RegistrantWebsiteTracking](docs/Model/RegistrantWebsiteTracking.md)
 - [RegistrantWrite](docs/Model/RegistrantWrite.md)
 - [RegistrantWriteLinks](docs/Model/RegistrantWriteLinks.md)
 - [SalesRep](docs/Model/SalesRep.md)
 - [SecondarySourceType](docs/Model/SecondarySourceType.md)
 - [SourceType](docs/Model/SourceType.md)
 - [StandardError](docs/Model/StandardError.md)
 - [Storage](docs/Model/Storage.md)
 - [StorageLocker](docs/Model/StorageLocker.md)
 - [SubResourceNotFound](docs/Model/SubResourceNotFound.md)
 - [Subject](docs/Model/Subject.md)


## Documentation For Authorization


## JwtAuthorizer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




