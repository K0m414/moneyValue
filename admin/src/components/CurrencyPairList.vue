<script>
import axios from "axios";
import { RouterLink } from "vue-router";
export default {
    data(){
        return{
            pairs : [],
            currency_id_a: [],
            currency_id_b: [],
        }
    },
  mounted() {
    axios.get("http://127.0.0.1:8000/api/pairs")
    .then((response) => {
      this.pairs = response.data.pair;
        console.log(this.pairs);

this.pairs.forEach(element => {
    console.log(element.currency_id_a)
    let urlRquestIdA = `http://127.0.0.1:8000/api/currencies/${element.currency_id_a}`
    let urlRquestIdB = `http://127.0.0.1:8000/api/currencies/${element.currency_id_b}`
    const requestOne = axios.get(urlRquestIdA);
    const requestTwo = axios.get(urlRquestIdB);
 
axios.all([requestOne, requestTwo])
.then(axios.spread((...responses) => {

this.currency_id_a.push(responses[0].data.currency);
this.currency_id_b.push(responses[1].data.currency);

// console.log(this.currency_id_a[element.currency_id_a].currency_name)
  }))
    .catch(errors => {
console.log(errors.response.data);
    })
    });

    })
    .catch((error) => {
          console.log(error.response.data);
        });
  },
};

</script>
<template>
<div>

    <h1>tableau d'administration</h1>
    <div>
        <button class="btn btn-primary"> Ajouter une nouvelle paire de devise </button>
    </div>  
<hr>
    <table class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Nom de la paire </th>
            <th>Taux de change</th>
            <th>Décompte</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="pair in this.pairs" :key="pair.id">
            <td >{{this.currency_id_a[1].currency_code}}'=>'{{this.currency_id_b[1].currency_code}}</td>
            <td >{{pair.exchange_rate_a_to_b}}</td>
            <td >{{pair.count}}</td>
            <td><button class="btn btn-primary">Modifier</button></td>
            <td><button class="btn btn-primary">Supprimer</button></td>
        </tr>
    </tbody>
    </table>
</div>
</template>

