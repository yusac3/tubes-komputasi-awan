pipeline {
    agent any
    environment {
        DOCKER_IMAGE = 'my-docker-image'
        
    }

    stages {
    
        stage('Checkout Code') {
            steps {
                echo 'Checkout the Code...'
                  git url: 
            }
        }



        stage('Notify Discord') {
            steps {
                script {
                    def message = [
                        "content": "Pipeline berhasil",
                        "embeds": [
                            [
                                "title": "docker build dan push",
                                "description": "Image ${DOCKER_IMAGE} berhasil di push",
                                "color": 3066993
                            ]
                        ]
                    ]
                    // Perhatikan penulisan url dan gunakan tanda kutip yang benar
                    httpRequest(
                        httpMode: 'POST',
                        acceptType: 'APPLICATION_JSON',
                        contentType: 'APPLICATION_JSON',
                        requestBody: groovy.json.JsonOutput.toJson(message),
                        url: 'https://discord.com/api/webhooks/1326547014049333308/ePZfvF0R57c31cmIOGeyAOVIl_DB1TtRO1Ff2cPlHh1QBQTEyXNNeN8oa_0azr0LkdJR'
                    )
                }
            }
        }
    }
    post {
        failure {
            script {
                def message = [
                    "content": "Pipeline gagal",
                    "embeds": [
                        [
                            "title": "Pipeline gagal",
                            "description": "Terdapat kesalahan",
                            "color": 15158332
                        ]
                    ]
                ]
                // Perhatikan penulisan url dan gunakan tanda kutip yang benar
                httpRequest(
                    httpMode: 'POST',
                    acceptType: 'APPLICATION_JSON',
                    contentType: 'APPLICATION_JSON',
                    requestBody: groovy.json.JsonOutput.toJson(message),
                    url: 'https://discord.com/api/webhooks/1326547014049333308/ePZfvF0R57c31cmIOGeyAOVIl_DB1TtRO1Ff2cPlHh1QBQTEyXNNeN8oa_0azr0LkdJR'
                )
            }
        }
    }
}
