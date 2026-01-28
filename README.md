# DEPRICATED - USE THE API
# RadioManager
Pluxbox RadioManager gives you the power, flexibility and speed you always wanted in a lightweight and easy-to-use web-based radio solution. With Pluxbox RadioManager you can organise your radio workflow and automate your omnichannel communication with your listeners. We offer wide range specialised services for the radio and connections like Hybrid Radio, Visual Radio, your website and social media without losing focus on your broadcast. For more information visit: pluxbox.com

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://pluxbox.com](https://pluxbox.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/pluxbox/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "pluxbox/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/RadioManager/vendor/autoload.php');
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

// Configure API key authorization: API Key
$config = RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new RadioManager\Api\BlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of Block **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $apiInstance->getBlockById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getBlockById: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://radiomanager.io/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BlockApi* | [**getBlockById**](docs/Api/BlockApi.md#getblockbyid) | **GET** /blocks/{id} | Get block by id
*BlockApi* | [**getCurrentBlock**](docs/Api/BlockApi.md#getcurrentblock) | **GET** /blocks/current | Get current Block
*BlockApi* | [**getNextBlock**](docs/Api/BlockApi.md#getnextblock) | **GET** /blocks/next | Get upcoming Block
*BlockApi* | [**listBlocks**](docs/Api/BlockApi.md#listblocks) | **GET** /blocks | Get a list of all blocks currently in your station.
*BroadcastApi* | [**createBroadcast**](docs/Api/BroadcastApi.md#createbroadcast) | **POST** /broadcasts | Create broadcast.
*BroadcastApi* | [**deleteBroadcastById**](docs/Api/BroadcastApi.md#deletebroadcastbyid) | **DELETE** /broadcasts/{id} | Delete broadcast by id
*BroadcastApi* | [**getBroadcastById**](docs/Api/BroadcastApi.md#getbroadcastbyid) | **GET** /broadcasts/{id} | Get broadcast by id
*BroadcastApi* | [**getCurrentBroadcast**](docs/Api/BroadcastApi.md#getcurrentbroadcast) | **GET** /broadcasts/current | Get current Broadcast
*BroadcastApi* | [**getDailyEPG**](docs/Api/BroadcastApi.md#getdailyepg) | **GET** /broadcasts/epg/daily | Get daily EPG
*BroadcastApi* | [**getEPGByDate**](docs/Api/BroadcastApi.md#getepgbydate) | **GET** /broadcasts/epg | Get EPG by date
*BroadcastApi* | [**getNextBroadcast**](docs/Api/BroadcastApi.md#getnextbroadcast) | **GET** /broadcasts/next | Get next Broadcast
*BroadcastApi* | [**getWeeklyEPG**](docs/Api/BroadcastApi.md#getweeklyepg) | **GET** /broadcasts/epg/weekly | Get weekly EPG
*BroadcastApi* | [**listBroadcasts**](docs/Api/BroadcastApi.md#listbroadcasts) | **GET** /broadcasts | Get all broadcasts.
*BroadcastApi* | [**printBroadcastById**](docs/Api/BroadcastApi.md#printbroadcastbyid) | **GET** /broadcasts/print/{id} | Print broadcast by id with template
*BroadcastApi* | [**updateBroadcastByID**](docs/Api/BroadcastApi.md#updatebroadcastbyid) | **PATCH** /broadcasts/{id} | Update broadcast by id
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /campaigns | Create campaign.
*CampaignApi* | [**deleteCampaignById**](docs/Api/CampaignApi.md#deletecampaignbyid) | **DELETE** /campaigns/{id} | Delete campaign by id
*CampaignApi* | [**getCampaignById**](docs/Api/CampaignApi.md#getcampaignbyid) | **GET** /campaigns/{id} | Get campaign by id
*CampaignApi* | [**listCampaigns**](docs/Api/CampaignApi.md#listcampaigns) | **GET** /campaigns | Get all campaigns.
*CampaignApi* | [**updateCampaignByID**](docs/Api/CampaignApi.md#updatecampaignbyid) | **PATCH** /campaigns/{id} | Update campaign by id
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /contacts | Create contact.
*ContactApi* | [**deleteContactById**](docs/Api/ContactApi.md#deletecontactbyid) | **DELETE** /contacts/{id} | Delete contact by id
*ContactApi* | [**getContactById**](docs/Api/ContactApi.md#getcontactbyid) | **GET** /contacts/{id} | Get contact by id
*ContactApi* | [**listContacts**](docs/Api/ContactApi.md#listcontacts) | **GET** /contacts | Get all contacts.
*ContactApi* | [**updateContactByID**](docs/Api/ContactApi.md#updatecontactbyid) | **PATCH** /contacts/{id} | Update contact by id
*GenreApi* | [**getGenreById**](docs/Api/GenreApi.md#getgenrebyid) | **GET** /genres/{id} | Get genre by id
*GenreApi* | [**listGenres**](docs/Api/GenreApi.md#listgenres) | **GET** /genres | List all genres.
*ItemApi* | [**createItem**](docs/Api/ItemApi.md#createitem) | **POST** /items | Create an new item.
*ItemApi* | [**currentItemPostStructure**](docs/Api/ItemApi.md#currentitempoststructure) | **POST** /items/current/structure | Post a current playing item, keep structure
*ItemApi* | [**currentItemPostTiming**](docs/Api/ItemApi.md#currentitemposttiming) | **POST** /items/current/timing | Post a current playing item
*ItemApi* | [**deleteItemById**](docs/Api/ItemApi.md#deleteitembyid) | **DELETE** /items/{id} | Delete item by ID.
*ItemApi* | [**getCurrentItem**](docs/Api/ItemApi.md#getcurrentitem) | **GET** /items/current | Get current Item
*ItemApi* | [**getItemById**](docs/Api/ItemApi.md#getitembyid) | **GET** /items/{id} | Get extended item details by ID.
*ItemApi* | [**listItems**](docs/Api/ItemApi.md#listitems) | **GET** /items | Get a list of all the items currently in your station.
*ItemApi* | [**playlistPostMerge**](docs/Api/ItemApi.md#playlistpostmerge) | **POST** /items/playlist/merge | Post a playlist, do not remove previously imported items
*ItemApi* | [**playlistPostStructure**](docs/Api/ItemApi.md#playlistpoststructure) | **POST** /items/playlist/structure | Post a playlist, keep current structure
*ItemApi* | [**playlistPostTiming**](docs/Api/ItemApi.md#playlistposttiming) | **POST** /items/playlist/timing | Post a playlist
*ItemApi* | [**stopCurrentItem**](docs/Api/ItemApi.md#stopcurrentitem) | **POST** /items/stopcurrent | Stop an Item
*ItemApi* | [**updateItemById**](docs/Api/ItemApi.md#updateitembyid) | **PATCH** /items/{id} | Update extended item details by ID.
*ModelTypeApi* | [**getModelTypeById**](docs/Api/ModelTypeApi.md#getmodeltypebyid) | **GET** /model_types/{id} | Get modelType by id
*ModelTypeApi* | [**listModelTypes**](docs/Api/ModelTypeApi.md#listmodeltypes) | **GET** /model_types | Get all modelTypes.
*PresenterApi* | [**createPresenter**](docs/Api/PresenterApi.md#createpresenter) | **POST** /presenters | Create presenter.
*PresenterApi* | [**deletePresenterById**](docs/Api/PresenterApi.md#deletepresenterbyid) | **DELETE** /presenters/{id} | Delete presenter by id
*PresenterApi* | [**getPresenterById**](docs/Api/PresenterApi.md#getpresenterbyid) | **GET** /presenters/{id} | Get presenter by id
*PresenterApi* | [**listPresenters**](docs/Api/PresenterApi.md#listpresenters) | **GET** /presenters | Get all presenters.
*PresenterApi* | [**updatePresenterByID**](docs/Api/PresenterApi.md#updatepresenterbyid) | **PATCH** /presenters/{id} | Update presenter by id
*ProgramApi* | [**createProgram**](docs/Api/ProgramApi.md#createprogram) | **POST** /programs | Create program.
*ProgramApi* | [**deleteProgramById**](docs/Api/ProgramApi.md#deleteprogrambyid) | **DELETE** /programs/{id} | Delete program by id
*ProgramApi* | [**getProgramById**](docs/Api/ProgramApi.md#getprogrambyid) | **GET** /programs/{id} | Get program by id
*ProgramApi* | [**listPrograms**](docs/Api/ProgramApi.md#listprograms) | **GET** /programs | Get all programs.
*ProgramApi* | [**updateProgramByID**](docs/Api/ProgramApi.md#updateprogrambyid) | **PATCH** /programs/{id} | Update program by id
*StationApi* | [**getStation**](docs/Api/StationApi.md#getstation) | **GET** /station | Get own station only
*StoryApi* | [**createStory**](docs/Api/StoryApi.md#createstory) | **POST** /stories | Create story.
*StoryApi* | [**deleteStoryById**](docs/Api/StoryApi.md#deletestorybyid) | **DELETE** /stories/{id} | Delete story by id
*StoryApi* | [**getStoryById**](docs/Api/StoryApi.md#getstorybyid) | **GET** /stories/{id} | Get story by id
*StoryApi* | [**listStories**](docs/Api/StoryApi.md#liststories) | **GET** /stories | Get all stories.
*StoryApi* | [**updateStoryByID**](docs/Api/StoryApi.md#updatestorybyid) | **PATCH** /stories/{id} | Update story by id
*StringApi* | [**getStringsByName**](docs/Api/StringApi.md#getstringsbyname) | **GET** /strings/{name} | Get Strings (formatted)
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /tags | Create tag.
*TagApi* | [**deleteTagById**](docs/Api/TagApi.md#deletetagbyid) | **DELETE** /tags/{id} | Delete tag by id
*TagApi* | [**getTagById**](docs/Api/TagApi.md#gettagbyid) | **GET** /tags/{id} | Get tags by id
*TagApi* | [**listTags**](docs/Api/TagApi.md#listtags) | **GET** /tags | Get a list of all the tags currently in your station.
*TagApi* | [**updateTagByID**](docs/Api/TagApi.md#updatetagbyid) | **PATCH** /tags/{id} | Update tag by id
*UserApi* | [**deleteUserById**](docs/Api/UserApi.md#deleteuserbyid) | **DELETE** /users/{id} | Remove user from station by Id
*UserApi* | [**getUserById**](docs/Api/UserApi.md#getuserbyid) | **GET** /users/{id} | Get user by id
*UserApi* | [**inviteUserByMail**](docs/Api/UserApi.md#inviteuserbymail) | **POST** /users/invite | Invite user by mail
*UserApi* | [**listUsers**](docs/Api/UserApi.md#listusers) | **GET** /users | Get all users.
*VisualSlideApi* | [**getVisualSlide**](docs/Api/VisualSlideApi.md#getvisualslide) | **GET** /visual | Get Visual Slide Image as Base64


## Documentation For Models

 - [Block](docs/Model/Block.md)
 - [BlockRelations](docs/Model/BlockRelations.md)
 - [BlockRelationsBroadcast](docs/Model/BlockRelationsBroadcast.md)
 - [BlockRelationsBroadcastParams](docs/Model/BlockRelationsBroadcastParams.md)
 - [BlockRelationsItems](docs/Model/BlockRelationsItems.md)
 - [BlockRelationsItemsParams](docs/Model/BlockRelationsItemsParams.md)
 - [BlockRelationsProgram](docs/Model/BlockRelationsProgram.md)
 - [BlockResults](docs/Model/BlockResults.md)
 - [Broadcast](docs/Model/Broadcast.md)
 - [BroadcastEPGDay](docs/Model/BroadcastEPGDay.md)
 - [BroadcastEPGRelations](docs/Model/BroadcastEPGRelations.md)
 - [BroadcastInputOnly](docs/Model/BroadcastInputOnly.md)
 - [BroadcastOutputOnly](docs/Model/BroadcastOutputOnly.md)
 - [BroadcastRelations](docs/Model/BroadcastRelations.md)
 - [BroadcastRelationsBlocks](docs/Model/BroadcastRelationsBlocks.md)
 - [BroadcastRelationsGenre](docs/Model/BroadcastRelationsGenre.md)
 - [BroadcastRelationsItems](docs/Model/BroadcastRelationsItems.md)
 - [BroadcastRelationsItemsParams](docs/Model/BroadcastRelationsItemsParams.md)
 - [BroadcastRelationsModelType](docs/Model/BroadcastRelationsModelType.md)
 - [BroadcastRelationsPresenters](docs/Model/BroadcastRelationsPresenters.md)
 - [BroadcastRelationsTags](docs/Model/BroadcastRelationsTags.md)
 - [BroadcastResults](docs/Model/BroadcastResults.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignOutputOnly](docs/Model/CampaignOutputOnly.md)
 - [CampaignRelations](docs/Model/CampaignRelations.md)
 - [CampaignRelationsItems](docs/Model/CampaignRelationsItems.md)
 - [CampaignRelationsItemsParams](docs/Model/CampaignRelationsItemsParams.md)
 - [CampaignResults](docs/Model/CampaignResults.md)
 - [CampaignTemplateItem](docs/Model/CampaignTemplateItem.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactOutputOnly](docs/Model/ContactOutputOnly.md)
 - [ContactRelations](docs/Model/ContactRelations.md)
 - [ContactRelationsItems](docs/Model/ContactRelationsItems.md)
 - [ContactRelationsTags](docs/Model/ContactRelationsTags.md)
 - [ContactRelationsTagsParams](docs/Model/ContactRelationsTagsParams.md)
 - [ContactResults](docs/Model/ContactResults.md)
 - [Data](docs/Model/Data.md)
 - [Data1](docs/Model/Data1.md)
 - [Data2](docs/Model/Data2.md)
 - [Data3](docs/Model/Data3.md)
 - [EPGResults](docs/Model/EPGResults.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [Genre](docs/Model/Genre.md)
 - [GenreOutputOnly](docs/Model/GenreOutputOnly.md)
 - [GenreRelations](docs/Model/GenreRelations.md)
 - [GenreRelationsBroadcasts](docs/Model/GenreRelationsBroadcasts.md)
 - [GenreRelationsBroadcastsParams](docs/Model/GenreRelationsBroadcastsParams.md)
 - [GenreRelationsPrograms](docs/Model/GenreRelationsPrograms.md)
 - [GenreResults](docs/Model/GenreResults.md)
 - [ImportItem](docs/Model/ImportItem.md)
 - [InlineResponse202](docs/Model/InlineResponse202.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [InviteUserData](docs/Model/InviteUserData.md)
 - [InviteUserSuccess](docs/Model/InviteUserSuccess.md)
 - [Item](docs/Model/Item.md)
 - [ItemInputOnly](docs/Model/ItemInputOnly.md)
 - [ItemOutputOnly](docs/Model/ItemOutputOnly.md)
 - [ItemRelations](docs/Model/ItemRelations.md)
 - [ItemRelationsBlock](docs/Model/ItemRelationsBlock.md)
 - [ItemRelationsCampaign](docs/Model/ItemRelationsCampaign.md)
 - [ItemRelationsContacts](docs/Model/ItemRelationsContacts.md)
 - [ItemRelationsContactsParams](docs/Model/ItemRelationsContactsParams.md)
 - [ItemRelationsProgram](docs/Model/ItemRelationsProgram.md)
 - [ItemRelationsTags](docs/Model/ItemRelationsTags.md)
 - [ItemResults](docs/Model/ItemResults.md)
 - [ModelType](docs/Model/ModelType.md)
 - [ModelTypeOptions](docs/Model/ModelTypeOptions.md)
 - [ModelTypeOutputOnly](docs/Model/ModelTypeOutputOnly.md)
 - [ModelTypeRelations](docs/Model/ModelTypeRelations.md)
 - [ModelTypeRelationsBroadcasts](docs/Model/ModelTypeRelationsBroadcasts.md)
 - [ModelTypeRelationsCampaigns](docs/Model/ModelTypeRelationsCampaigns.md)
 - [ModelTypeRelationsCampaignsParams](docs/Model/ModelTypeRelationsCampaignsParams.md)
 - [ModelTypeRelationsContacts](docs/Model/ModelTypeRelationsContacts.md)
 - [ModelTypeRelationsItems](docs/Model/ModelTypeRelationsItems.md)
 - [ModelTypeRelationsPresenters](docs/Model/ModelTypeRelationsPresenters.md)
 - [ModelTypeRelationsPrograms](docs/Model/ModelTypeRelationsPrograms.md)
 - [ModelTypeResults](docs/Model/ModelTypeResults.md)
 - [NotFound](docs/Model/NotFound.md)
 - [PostSuccess](docs/Model/PostSuccess.md)
 - [Presenter](docs/Model/Presenter.md)
 - [PresenterOutputOnly](docs/Model/PresenterOutputOnly.md)
 - [PresenterRelations](docs/Model/PresenterRelations.md)
 - [PresenterRelationsBroadcasts](docs/Model/PresenterRelationsBroadcasts.md)
 - [PresenterRelationsPrograms](docs/Model/PresenterRelationsPrograms.md)
 - [PresenterRelationsProgramsParams](docs/Model/PresenterRelationsProgramsParams.md)
 - [PresenterResults](docs/Model/PresenterResults.md)
 - [Program](docs/Model/Program.md)
 - [ProgramInputOnly](docs/Model/ProgramInputOnly.md)
 - [ProgramOutputOnly](docs/Model/ProgramOutputOnly.md)
 - [ProgramRelations](docs/Model/ProgramRelations.md)
 - [ProgramRelationsBlocks](docs/Model/ProgramRelationsBlocks.md)
 - [ProgramRelationsBroadcasts](docs/Model/ProgramRelationsBroadcasts.md)
 - [ProgramRelationsItems](docs/Model/ProgramRelationsItems.md)
 - [ProgramRelationsItemsParams](docs/Model/ProgramRelationsItemsParams.md)
 - [ProgramRelationsPresenters](docs/Model/ProgramRelationsPresenters.md)
 - [ProgramRelationsTags](docs/Model/ProgramRelationsTags.md)
 - [ProgramResults](docs/Model/ProgramResults.md)
 - [ReadOnly](docs/Model/ReadOnly.md)
 - [RelationsPlaceholder](docs/Model/RelationsPlaceholder.md)
 - [StationResult](docs/Model/StationResult.md)
 - [StationResultStation](docs/Model/StationResultStation.md)
 - [StationResultStationStartDays](docs/Model/StationResultStationStartDays.md)
 - [Story](docs/Model/Story.md)
 - [StoryInputOnly](docs/Model/StoryInputOnly.md)
 - [StoryOutputOnly](docs/Model/StoryOutputOnly.md)
 - [StoryRelations](docs/Model/StoryRelations.md)
 - [StoryRelationsItems](docs/Model/StoryRelationsItems.md)
 - [StoryRelationsTags](docs/Model/StoryRelationsTags.md)
 - [StoryRelationsTagsParams](docs/Model/StoryRelationsTagsParams.md)
 - [StoryResults](docs/Model/StoryResults.md)
 - [Success](docs/Model/Success.md)
 - [Tag](docs/Model/Tag.md)
 - [TagOutputOnly](docs/Model/TagOutputOnly.md)
 - [TagRelations](docs/Model/TagRelations.md)
 - [TagRelationsBroadcasts](docs/Model/TagRelationsBroadcasts.md)
 - [TagRelationsBroadcastsParams](docs/Model/TagRelationsBroadcastsParams.md)
 - [TagRelationsContacts](docs/Model/TagRelationsContacts.md)
 - [TagRelationsItems](docs/Model/TagRelationsItems.md)
 - [TagRelationsPrograms](docs/Model/TagRelationsPrograms.md)
 - [TagResults](docs/Model/TagResults.md)
 - [TextString](docs/Model/TextString.md)
 - [TooManyRequests](docs/Model/TooManyRequests.md)
 - [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
 - [UserResult](docs/Model/UserResult.md)
 - [UserResultRoles](docs/Model/UserResultRoles.md)
 - [UserResultSettings](docs/Model/UserResultSettings.md)
 - [UserResults](docs/Model/UserResults.md)
 - [VisualResult](docs/Model/VisualResult.md)
 - [BlockResult](docs/Model/BlockResult.md)
 - [BroadcastDataInput](docs/Model/BroadcastDataInput.md)
 - [BroadcastEPGResult](docs/Model/BroadcastEPGResult.md)
 - [BroadcastResult](docs/Model/BroadcastResult.md)
 - [CampaignDataInput](docs/Model/CampaignDataInput.md)
 - [CampaignResult](docs/Model/CampaignResult.md)
 - [ContactDataInput](docs/Model/ContactDataInput.md)
 - [ContactResult](docs/Model/ContactResult.md)
 - [GenreResult](docs/Model/GenreResult.md)
 - [ItemDataInput](docs/Model/ItemDataInput.md)
 - [ItemResult](docs/Model/ItemResult.md)
 - [ModelTypeResult](docs/Model/ModelTypeResult.md)
 - [PresenterDataInput](docs/Model/PresenterDataInput.md)
 - [PresenterEPGResult](docs/Model/PresenterEPGResult.md)
 - [PresenterResult](docs/Model/PresenterResult.md)
 - [ProgramDataInput](docs/Model/ProgramDataInput.md)
 - [ProgramResult](docs/Model/ProgramResult.md)
 - [StoryDataInput](docs/Model/StoryDataInput.md)
 - [StoryResult](docs/Model/StoryResult.md)
 - [TagDataInput](docs/Model/TagDataInput.md)
 - [TagResult](docs/Model/TagResult.md)


## Documentation For Authorization


## API Key

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header


## Author

support@pluxbox.com


