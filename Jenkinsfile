pipeline {
    agent any

    environment {
        DISCORD_WEBHOOK_URL = "https://discord.com/api/webhooks/YOUR_WEBHOOK_ID/YOUR_WEBHOOK_TOKEN"
        PIPELINE_NAME = "My Pipeline"
        JOB_NAME = env.JOB_NAME
        BUILD_URL = env.BUILD_URL
        GIT_COMMIT = sh(script: 'git rev-parse --short HEAD', returnStdout: true).trim()
        GIT_AUTHOR = sh(script: 'git log -1 --pretty=format:"%an"', returnStdout: true).trim()
        GIT_MESSAGE = sh(script: 'git log -1 --pretty=format:"%s"', returnStdout: true).trim()
    }

    stages {
        stage('Build') {
            steps {
                echo 'Building the project...'
                // Simulate a build process
                sh 'echo "Build process here"'
            }
        }

        stage('Test') {
            steps {
                echo 'Running tests...'
                // Simulate test process
                sh 'echo "Test process here"'
            }
        }
    }

    post {
        success {
            script {
                sendDiscordNotification("SUCCESS")
            }
        }
        failure {
            script {
                sendDiscordNotification("FAILURE")
            }
        }
    }
}

def sendDiscordNotification(String status) {
    def color = status == "SUCCESS" ? 3066993 : 15158332 // Green or Red
    def statusText = status == "SUCCESS" ? "✅ **Success**" : "❌ **Failure**"

    def message = """
    {
      "embeds": [
        {
          "title": "Pipeline Notification",
          "description": "**Pipeline:** ${PIPELINE_NAME}\\n**Job:** ${JOB_NAME}\\n**Status:** ${statusText}\\n**Commit:** `${GIT_COMMIT}`\\n**Author:** ${GIT_AUTHOR}\\n**Message:** ${GIT_MESSAGE}\\n**Build URL:** [Click here](${BUILD_URL})",
          "color": ${color},
          "timestamp": "${new Date().format("yyyy-MM-dd'T'HH:mm:ss'Z'", TimeZone.getTimeZone('UTC'))}"
        }
      ]
    }
    """

    sh """
    curl -X POST -H "Content-Type: application/json" -d '${message}' "${DISCORD_WEBHOOK_URL}"
    """
}
