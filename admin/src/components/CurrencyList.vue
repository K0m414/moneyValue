<script>
import axios from 'axios';
    const URL = "http://127.0.0.1:8000/api/currencies";

export default {
    name:'CurrencyList',
    data(){
        return{
            api_data : ''
        }
    },
    mounted(){
        axios.get(URL)
        .then((response) => {this.api_data = response.data.currencies;
        console.log(this.api_data);
        })
    }
}
</script>
<template>
    <div>
        <button class="btn btn-primary"> Ajouter une nouvelle paire de devise </button>

        <table class="table table-striped table-dark">
            <thead>
            <tr class="thead-light" scope="col">
                <th>nom de la devise</th>
                <th>code de la devise </th>
                <th>symbol de la devise</th>
            </tr>
            </thead>
        <tbody>
            <tr v-for="data in this.api_data" :key="data.id" scope="row">
                <td>{{data.currency_name}}</td>
                <td>{{data.currency_code}}</td>
                <td>{{data.currency_symbol}}</td>
            </tr>
        </tbody>
        </table>
    </div>
</template>