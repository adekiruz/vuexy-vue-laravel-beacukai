<template>
    <b-row class="match-height">
        <b-col md="4"><chartjs-line-chart /></b-col>
        <b-col md="4">
            <b-card no-body>
                <b-card-header>
                    <div class="d-flex flex-column justify-content-center align-items-center w-100">
                        <b-card-title>Komposisi Jalur PIB</b-card-title>
                        <span>Th-2023</span>
                    </div>
                </b-card-header>

                <!-- chart -->
                <b-card-body>
                    <chartjs-component-pie-chart :data="pieChartData" :options="pieChartOptions" />
                </b-card-body>
            </b-card>
        </b-col>
        <b-col md="4"><chartjs-line-chart /></b-col>
    </b-row>
</template>
  
<script>
import { BRow, BCol, BLink, BCard, BCardHeader, BCardBody, BCardTitle } from 'bootstrap-vue';
import flatPickr from 'vue-flatpickr-component';

import ChartjsComponentPieChart from '../../../charts-and-maps/charts/chartjs/charts-components/ChartjsComponentPieChart.vue';

import ChartjsLineChart from '../../../charts-and-maps/charts/chartjs/ChartjsLineChart.vue';

export default {
    data() {
        return {
            dataCount: 5,
            pieChartData: {
                labels: [ 'Merah', 'Kuning', 'Hijau' ],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: [ 7.7, 0.0, 92.3 ],
                        backgroundColor: Object.values({
                            red: 'red',
                            yellow: 'yellow',
                            green: 'green',
                        }),
                    }
                ]
            },
            pieChartOptions: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Pie Chart'
                    }
                }
            }
        };
    },
    components: {
        BRow,
        BCol,
        BLink,
        BCard,
        BCardHeader,
        BCardBody,
        BCardTitle,
        flatPickr,

        ChartjsLineChart,
        ChartjsComponentPieChart,
    },
};
</script>
  