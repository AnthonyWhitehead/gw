/* eslint-disable react/no-danger */
import React from 'react';
import Card from '@material-ui/core/Card';
import {
  CardHeader,
  CardMedia,
  CardContent,
  Typography,
} from '@material-ui/core';
import { useParams } from 'react-router-dom';
import { useState } from 'react';
import { useEffect } from 'react';

const Poem = () => {
  const { title } = useParams();

  const [poem, setPoem] = useState({});
  const [hasError, setErrors] = useState(false);

  async function fetchPoem() {
    const res = await fetch(`/api/poem/${title}`);
    res
      .json()
      .then((response) => setPoem(response))
      .catch((err) => setErrors(err));
  }

  useEffect(() => {
    fetchPoem();
  }, []);

  const createPoemBody = () => {
    return { __html: poem.body };
  };

  const imgUrl = `/img/${poem.title}.jpg`;

  return (
    <div className="poem-container">
      <Card className="card">
        <CardMedia className="card-media" image={imgUrl} title={poem.title} />
        <CardHeader className="card-title" title={poem.title} />
        <CardContent>
          <Typography
            variant="body1"
            color="textSecondary"
            component="div"
            dangerouslySetInnerHTML={createPoemBody()}
          />
        </CardContent>
      </Card>
    </div>
  );
};

export default Poem;
