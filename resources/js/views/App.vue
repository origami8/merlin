<template>
<v-app>
    <v-content>
    <v-container>
        <v-row>
            <v-col
                cols = "12">
                <v-card
                    class="mx-auto"
                    width="400">
                    <v-card-title><h1>Form</h1></v-card-title>
                    <v-card-text>
                        <v-form>
                            <v-text-field
                                v-model="form.someAttribute"
                                label="someAttribute"/>
                            <v-text-field
                                v-model="form.someInteger"
                                label="someInteger"/>

                        </v-form>
                    </v-card-text>
                    <v-card-actions>
                        <v-btn color="success" @click="createEntry">Send</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
    </v-content>
</v-app>
</template>

<script>
import TestdataService from "../services/TestdataService";

export default {
    name: "App",
    data: () => ({
        form: {
            someAttribute: "",
            someInteger: ""
        }
    }),
    methods:{
        async createEntry(){
            const data = TestdataService.createEntry(this.form)

        }
    }
}
</script>

<style scoped>

</style>
