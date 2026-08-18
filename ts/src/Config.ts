
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


  main = {
    name: 'Europaplus',
  }


  feature = {
     test:     {
      "options": {
        "active": false
      }
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
          "type": "`$STRING`"
        },
        {
          "name": "host",
          "type": "`$STRING`"
        },
        {
          "name": "program",
          "type": "`$STRING`"
        },
        {
          "name": "time",
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

