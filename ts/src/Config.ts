
import { BaseFeature } from './feature/base/BaseFeature'
import { TestFeature } from './feature/test/TestFeature'



const FEATURE_CLASS: Record<string, typeof BaseFeature> = {
   test: TestFeature,

}


class Config {

  makeFeature(this: any, fn: string) {
    const fc = FEATURE_CLASS[fn]
    const fi = new fc()
    // TODO: errors etc
    return fi
  }

  // False for a feature added at runtime via options.extend (station's
  // adopt path) - the constructor uses this to skip makeFeature for names
  // no generated class backs.
  hasFeature(this: any, fn: string) {
    return null != FEATURE_CLASS[fn]
  }


  main = {
    name: 'Europaplus',
        slug: "europaplus",
    version: "0.0.1",
    target: "ts",

  }


  feature = {
     test:     {
      "options": {
        "active": false
      },
      "transport": "base"
    },

  }


  options = {
    base: "https://www.europaplus.ru",

    headers: {
      "content-type": "application/json"
    },

    entity: {
      
      schedule: {
      },

    }
  }


  entity = {
    "schedule": {
      "fields": [
        {
          "name": "description",
          "short": "Program description",
          "type": "`$STRING`"
        },
        {
          "name": "host",
          "short": "Host or DJ name",
          "type": "`$STRING`"
        },
        {
          "name": "program",
          "short": "Name of the program",
          "type": "`$STRING`"
        },
        {
          "name": "time",
          "short": "Time of the scheduled program",
          "type": "`$STRING`"
        }
      ],
      "name": "schedule",
      "op": {
        "list": {
          "input": "data",
          "name": "list",
          "points": [
            {
              "args": {},
              "kind": "http",
              "method": "GET",
              "orig": "/schedule",
              "parts": [
                "schedule"
              ],
              "select": {},
              "transform": {
                "req": "`reqdata`",
                "res": "`body.schedule`"
              }
            }
          ]
        }
      },
      "relations": {
        "ancestors": []
      }
    }
  }
}


const config = new Config()

export {
  config
}

