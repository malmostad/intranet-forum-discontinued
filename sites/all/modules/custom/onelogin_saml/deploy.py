#!/usr/bin/env python

"""
Author: ado.b (echo@ado.io)
"""

from deployninja import DeployNinja

DeployNinja({
  "options": {
    "ignore":[".DS_Store", ".svn", ".git", "deploy.py", "deployninja.py", "deployninja.pyc"]
  },
  "environments": {
    "staging": {
      "target": {
        "host": "",
        "user": "root",
        "path": "/srv/www/htdocs/mobile-devel" # <- no ending slash
      },
      "source": {
        "path": "." # <- no ending slash
      }
    },
    "demo": {
      "target": {
        "host": "",
        "user": "root",
        "path": "/srv/www/htdocs/touch-demo" # <- no ending slash
      },
      "source": {
        "path": "." # <- no ending slash
      }
    },
    "test": {
      "target": {
        "host": "srvubuwebhost09.malmo.se",
        "user": "apps",
        "path": "/var/www/drupal-test/sites/all/modules/contrib/onelogin_saml" # <- no ending slash
      },
      "source": {
        "path": "." # <- no ending slash
      }
    },
    "production": {
      "confirm": "!!! You are about to deploy to production !!!",
      "target": {
        "host": "",
        "user": "root",
        "path": "/srv/www/webapps/touch_2" # <- no ending slash
      },
      "source": {
        "path": "." # <- no ending slash
      }
    }
  }
}).run()

