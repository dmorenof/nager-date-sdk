# Changelog

## [0.1.1] — 2026-11-25

Regenerated with sdk-generator 1.15.4: every collection and map says what it holds in its PHPDoc, so static analysis knows the type of each item (`$holiday->name` is no longer an error at PHPStan max, and the quick start needs no `assert`). Requires `dmorenof/sdk-runtime` `^1.14.1`. Nothing changes at run time.

## [0.1.0] — 2026-11-25

First version, generated with sdk-generator 1.15.3 on sdk-runtime 1.14.0 from the contract in `contract/` (the Community API V4 of Nager.Date, two small edits listed in `NOTICE.md`). Checked against the contract (strict generation, PHPStan at the maximum level, serialization of requests) and run against the live service: the version, the available countries, a country, the holidays of a year, the next holidays and a 404.
