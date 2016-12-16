<style>

</style>
<template>
    <tr>
        <td>{{index + from }}</td>
        <td><span>{{todo.name}}</span>
            <input v-model="todo-name" v-show="editing"><i class="fa fa-fw fa-edit" v-show="!editing" @onClick="">A</i>
        </td>
        <td>{{todo.priority}}</td>
        <td>{{todo.done}}</td>
        <td>
            <div class="progress progress-xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
            </div>
        </td>
        <td><span class="badge bg-red">55%</span></td>
    </tr>
</template>
<script>

import Pagination from './Pagination.vue'

export default {

    props: ['todo', 'index', 'form'],
    components : { Pagination },
    data() {
        return {
            editing: false
        }
    },

    created() {
        console.log('Component todolist created.');
    },
    methods: {
         hello : function (){
                console.log('Hello);
            },
         edit : function(){
            this.editing=false;
            },
         unedit : function(){
            this.editing=false;
            },
         save : function(){
            this.editing=false;
            }
    }
}
</script>
