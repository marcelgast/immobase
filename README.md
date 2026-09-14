# CLA signature register

This branch is the signature register for the ImmoBase Contributor License
Agreement. **It is not part of the project and is never merged into `main`.**
It has no shared history with `main` — it is an orphan branch that exists only
to hold these records.

## Contents

| Path | Maintained by | Contents |
|---|---|---|
| `signatures/version1/cla.json` | the CLA bot, automatically | Individual CLA acceptances for CLA version 1.0 |
| `corporate-signatures.md` | the maintainer, by hand | Companies that signed the Entity CLA |

## How individual signatures get here

A contributor opens a pull request against `main`. The `CLA` workflow comments
asking them to accept the agreement. When they reply with the signature
sentence, the workflow appends an entry to `cla.json` recording their GitHub
username, user ID, the pull request number and a timestamp.

**Do not edit `cla.json` by hand.** It is the evidence that a specific person
agreed to specific contract terms on a specific date. If something in it is
wrong, fix it deliberately and say why in the commit message.

## Versioning

The `version1` path segment tracks the version of `CLA.md`.

A substantive change to the agreement — rights granted, governing law, the
identity of the rights holder — bumps the CLA version, and the workflow is
pointed at a new `signatures/version2/cla.json`. Everyone is then asked to
accept the new text once. Signatures under the old path stay valid for the text
they were actually given for, which is why old files are kept rather than
migrated.

Typo and formatting fixes do not bump the version.

## Why this branch and not a separate repository

The alternative is a second repository, which requires a personal access token
stored as a secret. Tokens expire, and an expired one would silently block
every pull request. This branch is written with the built-in `GITHUB_TOKEN`,
which needs no maintenance.

Once the repository is public this register is public too. For a project that
intends to offer commercial licenses, that is a feature: anyone can verify who
agreed to what.
