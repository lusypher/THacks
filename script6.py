import os
os.environ["GOOGLE_APPLICATION_CREDENTIALS"] = "config.json"
import pandas as pd
def detect_labels_uri(uri):
    """Detects labels in the file located in Google Cloud Storage or on the Web."""
    from google.cloud import vision
    client = vision.ImageAnnotatorClient()
    image = vision.types.Image()
    image.source.image_uri = uri
    response = client.label_detection(image=image)
    labels = response.label_annotations
    return labels
def main():
    # Instantiates a client
    df = []
    all_previews = []
    origin = pd.read_csv('./sample.csv')
    saved_column = origin["preview"]
    for preview in saved_column:
        labels = str(detect_labels_uri(preview)).split(',')
        for label in labels:
            df.append(label.split('\n'))
            all_previews.append(preview)
    #print(labels)
    # print('Labels:', response, type(response), labels, type(labels))
        # print(label.description, type(label), type(label.description))
    df2 = pd.DataFrame(df)
    df2['preview'] = all_previews
    df2 = df2.merge(origin[['id','preview']], on='preview')
    df2.to_csv('./smaller.csv')
if __name__ == '__main__':
    main()