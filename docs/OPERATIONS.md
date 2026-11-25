# Nager.Date SDK for PHP: operations

6 operations. Each is a static method of a facade class (`NagerDateSDK\...`); configure the SDK once with `NagerDateAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Retrieve the complete list of all supported countries | GET | `/api/v4/Countries/Available` | `Api\V4\Countries\Available::get()` |
| Retrieves detailed information about a specific country | GET | `/api/v4/Countries/{countryCode}` | `Api\V4\Countries::getByCountryCode()` |
| Retrieve all upcoming public holidays occurring within the next 365 days for a given count | GET | `/api/v4/Holidays/{countryCode}/Next` | `Api\V4\Holidays\ByCountryCode\Next::get()` |
| Retrieve the list of all public holidays for the specified year and country | GET | `/api/v4/Holidays/{countryCode}/{year}` | `Api\V4\Holidays\ByCountryCode::getByYear()` |
| Determines whether today is a public holiday in the specified country or subdivision, opti | GET | `/api/v4/IotHolidays/{isoCode}/IsToday/{offset}` | `Api\V4\IotHolidays\ByIsoCode\IsToday::getByOffset()` |
| Retrieve the current version information of the Nager.Date library | GET | `/api/v4/Versions` | `Api\V4\Versions::get()` |
