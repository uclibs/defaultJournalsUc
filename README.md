# Default Journals@UC Theme

OJS custom theme for the Journals@UC homepage developed for OJS version 3.4.0-4

## Install
1. Follow [documentation](https://docs.pkp.sfu.ca/learning-ojs/en/settings-website#external-plugins) on installing 3rd party plugins in OJS.
1. Activate the plugin via site settings at the application level, *Administration* -> *Site Settings* -> *Appearance* tab.

## Configuration

### Proceedings column
This template splits the publications index/display on the homepage into two columns, one for academic journals and one for proceedings. All publications default to the Journals column. In order to show a publication in the Proceedings columns:

1. Add comma seperated journal IDs (integers) to the Proceedings Column field in the theme settings. e.g. 7,8,9,11.
1. Click *Save*.

## Development

Requirements for template release package
* Compress directory with `tar.gz` extension
* Tarball filename must match top-level filename
* Exclude git tracking

e.g `tar --exclude='.git/' -czf defaultJournalsUc.tar.gz ./defaultJournalsUc`
