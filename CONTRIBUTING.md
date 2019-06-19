# meshCSS Contributing Guide

Hello, we are very happy you decided to contribute to meshCSS. But before you start with your contribution, please make sure to read through our guidelines:

- [Code of Conduct](https://github.com/ainsleyclark/mesh/blob/master/CODE_OF_CONDUCT.md)
- [Issue Reporting Guidline](#issue-reporting-guidline)
- [Pull Request Guidlines](#pull-request-guidlines)

## Issue Reporting Guideline

If you find a bug or believe that some important feature is missing you can open a new issue on the Github-Project page, using our provided issue templates. Before creating a new issue, please make sure that there isn't already an issue covering this problem or requesting this feature.

## Pull Request Guidelines

- The `master` branch always contains the latest stable released version and doesn't take PRs. Instead create dedicated feature branches and submit your PR to our `dev` branch. **DO NOT SUBMIT PRs to master!**
- Always work in the `src` folder and **DO NOT** work in the dist folder, everything in there is generated from our tool-chain.
- It's okay if your PR contains several small commits as we will squash the PR before merging it.
- Please try to use meaningful commit messages.
- Before creating a new PR, check if your code is linted correctly.
- If you want to add a new feature:
  - Add a small but complete description of the new feature.
  - Please provide a convincing reason why you think this feature needs to be added.
- If you add a bug fix:
  - Please refer the corresponding issue, if one exists, in your PR.
  - If no issue exist for the bug you fix you need to provide a detailed description of the error and if possible a live demo. Or create a new issue on our [Github page](https://github.com/ainsleyclark/mesh/issues)

## Development Setup

You will need a supported version of [node.js](https://nodejs.org/en/download/) and npm (which comes bundled with node.js).

After you have cloned the repository you need to install the dependencies:

```bash
# change into the folder of the project
cd /path/to/the/repository
# install dependencies via npm
npm install
```

Now that all dependencies are installed you can start the development tools with the following npm script:

```bash
npm run dev
```

And you're ready to code!

## Project Structure

- **config**: contains certain config files for the tooling. Normally you don't need to change anything here.
- **dist**: is the folder which contains the compiled and minimized css files. You don't need to do anything in here.
- **documentation**: contains our documentation in markdown files. If you want to contribute to our documentation you need to work in here.
- **res**: contains only logo resources and such stuff.
- **src**: is the folder containing all the source code for mesh. Mesh is written using the SCSS pre-processor.
  - **abstracts**: contains abstract helper functions, mixins and all variable definitions.
  - **base**: the base file, containing global rules and normalization.
  - **components**: contains all our components source code.
  - **grid**: contains everything related to our grid system.
  - **util**: contains utility files such as colors, border, position etc.

## Financial Contribution

Currently we don't have any structure setup to accept financial contributions. We will update when such structures are in place.
