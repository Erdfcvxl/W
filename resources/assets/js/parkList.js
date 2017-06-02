import {JS} from "./functions";

export class ParkList
{
    constructor() {
        this.parkList = JS.selectFirst('#park-list');
        this.form = JS.selectFirst('#park-filters');

        if(this.parkList && this.form) {
            this.init();

            //global variables
            this.delayChangeEvent = [];
        }
    }

    init() {
        let self = this;

        let textInput = function(el) {
            return el.getAttribute('type') === 'text';
        };

        let inputs = JS.selectAll('input', self.form);

        for(let i = 0; i < inputs.length; i++) {
            if(textInput(inputs[i])) {
                JS.addEvent(inputs[i], 'keyup', function() {
                    clearTimeout(self.delayChangeEvent[i]);
                    self.delayChangeEvent[i] = setTimeout(function() {
                        self.updateResults(this);
                    }, 500);
                });
            }else {
                JS.addEvent(inputs[i], 'change', function() {
                    self.updateResults(this);
                });
            }

        }
    }

    updateResults() {
        let self = this;
        self.loaderStart();

        let url = self.form.getAttribute('action');
        let data = new FormData(self.form);
        let http = new XMLHttpRequest();


        http.onreadystatechange = function() {
            if (http.readyState === XMLHttpRequest.DONE ) {
                if (http.status === 200) {
                    self.parkList.innerHTML = http.response;
                }
                else if (http.status === 400) {
                    console.log('There was an error 400');
                }
                else {
                    console.log('something else other than 200 was returned');
                }

                self.loaderStop();
            }
        };

        http.open("POST", url, true);
        http.send(data);
    }

    //todo: create preloader
    loaderStart() {

    }

    loaderStop() {

    }
}

JS.addEvent(window, 'load', function() {
    new ParkList();
});